<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package the-proletariat
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'the-proletariat' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'the-proletariat' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			Site fashioned in the <a href="http://www.twilitgrotto.com">Twilit Grotto</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
