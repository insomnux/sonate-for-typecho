<?php
/* header.php */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

/* Style dice */
$title_style = array( 'style1', 'style2', 'style3', 'style4', 'style5', 'style6', 'style7', 'style8');
shuffle($title_style);
$i = 0;
?>
<!DOCTYPE HTML>
<html class="no-js">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
<?php $this->archiveTitle(array(
  'category' => _t('Category: %s'),
  'search' => _t('Search for: %s'),
  'tag' => _t('Tagged: %s'),
  'author'=>  _t('By: %s')
), '', ' - '); ?><?php $this->options->title(); ?></title>
  <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/style.css'); ?>">
  <?php $this->header(); ?>
</head>

<body>

<header class="top_header">
  <button class="toggle" type="button">
    <span class="toggle-box">
      <span class="toggle-box-inner"></span>
    </span>
  </button>
  <div class="nav_cont">
    <a class="logo" href="<?php $this->options->siteUrl(); ?>"><img id="logo" src="<?php $this->options->logo_url() ?>" alt="<?php $this->options->title() ?>" /></a>

    <nav id="top-menu">
      <a class="navli navlihome" href="<?php $this->options->siteUrl(); ?>"><span><?php _e('Home'); ?></span></a>
<?php
$this->widget('Widget_Contents_Page_List')->to($pages);
while($pages->next()):
  $this_style = $title_style[$i];
  $i++;
  if ($i >= count($title_style)) $i = 0;
?>
      <a class="navli <?php echo $this_style; ?>"<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><span><?php $pages->title(); ?></span></a>
<?php
  endwhile;
?>
    </nav><!-- ./#top-menu -->

    <!-- Search form -->
    <form action="/" method="get" class="search-form">
      <input type="text" placeholder="Search" autocomplete="off"><input type="submit" value="&rArr;">
    </form>
  </div>
</header>
