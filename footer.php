<?php
/* footer.php */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
<footer id="footer" role="contentinfo">
<p><span>&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a></span> • <span><?php _e('Powered by <a href="http://www.typecho.org">Typecho</a>'); ?></span> • <span><?php _e('Theme');?>: <a href="https://github.com/insomnux/sonate-for-typecho">Sonate</a></span>
</footer><!-- end #footer -->

<!-- js -->
<script src="<?php $this->options->themeUrl('assets/sonate.js'); ?>"></script>

</body>

</html>
