<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Expound
 */
?>
</div>
</div>
<!-- #main -->
<div class="upper-footer">
<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('upper-foot')) :     else : ?>
<?php endif; ?>
</div>
<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="container">
  	<!-- 1 -->
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 foot-social">
	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer-social-link')) :     else : ?>
    <?php endif; ?>
    </div>
  	<!-- 2 -->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 foot-menu">
	<?php wp_nav_menu( array('menu' => 'footer' )); ?>
    </div>
  	<!-- 3 -->
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 foot-copydiv">
	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer-copytext')) :     else : ?>
    <?php endif; ?>
    </div>
    <!--  -->
  </div>
</footer>
<!-- #colophon -->
</div>
<!-- #page -->

<?php wp_footer(); ?>
</body></html>