<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gema
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php
			wp_nav_menu( array(
				'theme_location' => 'footer',
				'menu_id' => 'footer-menu',
				'menu_class' => 'footer-menu',
				'depth' => 1,
				'container' => false
		) ); ?>
	</footer><!-- #colophon -->
	<div class="overlay-shadow"></div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>