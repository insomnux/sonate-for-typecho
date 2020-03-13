<?php
/* sidebar.php - widgets */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
  <aside id="sidebar">
<?php
/* Style dice */
$title_style = array( 'style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8');
shuffle($title_style);
$i = 0;

/* Have options? */
if (!empty($this->options->sidebarBlock)):
  /* Latest posts widget */
  if (in_array('ShowRecentPosts', $this->options->sidebarBlock)) {
    $this->widget('Widget_Contents_Post_Recent','pageSize=6')->to($post);
?>
    <section class="sidebar-widgets">
      <h3><?php _e('Latest posts'); ?></h3>
<?php
    while($post->next()) {
      $this_style = $title_style[$i];
      $i++;
      if ($i >= count($title_style)) {
		$i = 0;
	  }
?>
      <article class="sidebar-items <?php echo $this_style; ?>">
        <div class="sidebar-cat"><?php $post->category(','); ?></div>
        <h4><a href="<?php $post->permalink() ?>"><?php $post->title(25,'...') ?></a></h4>
      </article>
<?php } // endwhile ?>
    </section>
<?php
  } // if ShowRecentPosts

  /* Recent comments widget */
  if (in_array('ShowRecentComments', $this->options->sidebarBlock)) {
?>
    <section class="sidebar-widgets">
      <h3><?php _e('Recent comments'); ?></h3>
<?php
    $this->widget('Widget_Comments_Recent')->to($comments);
    
    while($comments->next()) {
      $this_style = $title_style[$i];
      $i++;
      if ($i >= count($title_style)) {
		$i = 0;
	  }
?>
      <article class="sidebar-items <?php echo $this_style; ?>">
        <a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>: <?php $comments->excerpt(35, '...'); ?>
      </article>
<?php } //endwhile ?>
    </section>
<?php
} // if ShowRecentComments

  /* Categories list widget */
  if (in_array('ShowCategory', $this->options->sidebarBlock)) {
?>
    <section class="sidebar-widgets">
      <h3><?php _e('Categories'); ?></h3>
      <ul class="widget-list">
<?php
    $this->widget('Widget_Metas_Category_List')->to($cats);
    while($cats->next()) {
      $this_style = $title_style[$i];
      $i++;
      if ($i >= count($title_style)) {
		$i = 0;
	  }
?>
        <li class="<?php echo $this_style; ?>">
          <a href="<?php $cats->permalink(); ?>"><?php $cats->name(); ?></a> (<?php $cats->count(); ?>)
        </li>
<?php } //endwhile ?>
      </ul>
    </section>
<?php
  } // If 

  /* Archive widget */
  if (in_array('ShowArchive', $this->options->sidebarBlock)) {
?>
    <section class="sidebar-widgets">
      <h3><?php _e('Monthly archives'); ?></h3>
      <ul class="widget-list">
<?php
    $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')->to($months);
    while($months->next()) {
      $this_style = $title_style[$i];
      $i++;
      if ($i >= count($title_style)) $i = 0;
?>
        <li class="<?php echo $this_style; ?>">
          <a href="<?php $months->permalink(); ?>"><?php $months->date(); ?></a>
        </li>
<?php } //endwhile ?>
      </ul>
    </section>
<?php
  } // If ShowArchive

  /* Login, feeds, etc widget */
  if (in_array('ShowOther', $this->options->sidebarBlock)) {
?>
    <section class="sidebar-widgets">
      <h3><?php _e('Blog meta'); ?></h3>
      <ul class="widget-list">
<?php if($this->user->hasLogin()): ?>
        <li class="<?php echo array_shift( $title_style ); ?>"><a href="<?php $this->options->adminUrl(); ?>"><?php _e('Control panel'); ?> (<?php $this->user->screenName(); ?>)</a></li>
<?php else: ?>
        <li class="<?php echo array_shift( $title_style ); ?>"><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('Login'); ?></a></li>
<?php endif; ?>
        <!-- RSS -->
        <li class="<?php echo array_shift( $title_style ); ?>"><a href="<?php $this->options->feedUrl(); ?>"><?php _e('Posts Feed'); ?></a></li>
        <li class="<?php echo array_shift( $title_style ); ?>"><a href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('Comments Feed'); ?></a></li>
        <li class="<?php echo array_shift( $title_style ); ?>"><a href="http://www.typecho.org">Typecho</a></li>
      </ul>
    </section>
<?php
  } // If ShowOther

endif; // not empty options sidebarBlock
?>
  </aside><!-- /#sidebar -->

</main>
