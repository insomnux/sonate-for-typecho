<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<main>
  <section id="error_page">
    <h2 class="post-title">404 - <?php _e('Page not found'); ?></h2>
    <p><?php _e('The page you are looking for might have been removed, had its name changed or is temporarily unavailable. Try to search?'); ?></p>
    <form method="post">
      <p><input type="text" name="s" class="text" autofocus /></p>
      <p><button type="submit" class="submit"><?php _e('Search'); ?></button></p>
    </form>
    </section>

</main>
<?php $this->need('footer.php'); ?>
