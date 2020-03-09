<?php
/* single.php */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<main>
  <section id="content">
<?php
while($this->next()):
  $title_style = array( 'style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8');
  $this_style = $title_style[rand(0,7)];
?>
    <article class="posts <?php echo $this_style; ?>" itemscope itemtype="http://schema.org/BlogPosting">
      <header class="title-box">
        <h2 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
        <div class="post-meta"><span><?php _e('Posted by'); ?></span> <a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a>, <span><?php _e('on'); ?></span> <time itemprop="datePublished" datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time><span> • </span><span class="post-discsion" itemprop="interactionCount"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum(_t('Post a comment'), _t('1 comment'), _t('%d comments')); ?></a></span><?php ; ?></div>
        <div class="post-cat"><span><?php _e('Category'); ?>:</span> <?php $this->category(',');?></div>
      </header><!-- ./.title-box -->
        
      <section class="post-content" itemprop="articleBody"><?php $this->content(_t('Read more >>')); ?></section>
      <footer class="post-content-footer">
        <p itemprop="keywords" class="tags <?php echo $this_style; ?>"><?php _e('Tags: '); ?><?php $this->tags(', ', true, 'none'); ?></p>
        <nav class="post-near">
          <p><?php $this->theNext('&laquo; %s', ''); ?></p>
          <p><?php $this->thePrev('%s &raquo;', ''); ?></p>
        </nav>
      </footer>
    </article>

    <!-- comments -->
    <aside id="post_comments">
<?php $this->need('comments.php'); ?>
    </aside>
<?php endwhile; ?>
  </section><!-- /#content -->
<?php
  $this->need('sidebar.php');
  $this->need('footer.php');
