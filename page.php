<?php
/* template for pages - page.php */

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
      <div class="title-box">
        <h2 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
      </div><!-- ./.title-box -->
        
      <div class="post-content" itemprop="articleBody"><?php $this->content(_t('Read more >>')); ?></div>
    </article>
<?php endwhile; ?>
  </section><!-- /#content -->
<?php
$this->need('sidebar.php');
$this->need('footer.php');
