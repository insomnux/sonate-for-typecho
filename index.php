<?php
/**
 * Theme for typecho - http://typecho.org
 *
 * @package Sonate - a theme for Typecho
 * @author insomnux
 * @version 1.0
 * @link https://github.com/insomnux/typecho-sonate
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<main>
  <section id="content">
<?php
$i = 0;
$title_style = array( 'style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8');
shuffle($title_style);
while($this->next()):
  $this_style = $title_style[$i];
  $i++;
  if ($i >= count($title_style)) {
    $i = 0;
  }
?>
    <article class="posts post-list <?php echo $this_style; ?>" itemscope itemtype="http://schema.org/BlogPosting">
      <div class="title-box">
        <h2 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
        <div class="post-meta"><span><?php _e('Posted by'); ?></span> <a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a>, <span><?php _e('on'); ?></span> <time itemprop="datePublished" datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time></div>
      <div class="post-cat"><span><?php _e('Category'); ?>:</span> <?php $this->category(',');?></div>
      </div><!-- ./.title-box -->
        
      <div class="post-content" itemprop="articleBody"><?php $this->excerpt(350,''); ?><p class="more"><a href="<?php $this->permalink(); ?>"><?php _e('Read more &rarr;'); ?></a></p></div>
    </article>
<?php
endwhile;
?>

    <!-- Page navigation links -->
    <div class="pagenav">
      <p><?php _e('See more posts'); ?></p>
<?php
$this->pageNav('&larr;', '&rarr;', '1','...');
?>
    </div>
  </section><!-- /#content -->
<?php
  $this->need('sidebar.php');
$this->need('footer.php');
