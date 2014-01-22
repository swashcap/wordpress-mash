<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the `.site-content` div and all content after
 *
 * @package WordPress Mash
 * @since WordPress Mash 1.0.0
 */
?>

  	</div><!-- .site-content -->

  	<footer class="site-footer" role="contentinfo">
      <small class="copyright">&copy;<?php echo date('Y'); ?>, <?php bloginfo('name'); ?>. <?php _e('All rights reserved.', 'mash'); ?></small>
  	</footer><!-- .site-footer -->
  </div><!-- .hfeed.site -->

  <?php wp_footer(); ?>

  </body>
</html>