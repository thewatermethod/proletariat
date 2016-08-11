<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package the-proletariat
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else if( is_post_type_archive('flyer')) {

			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			} 

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php the_proletariat_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->


	<?php if( is_single() ) :?>
		<div class="entry-content">
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'the-proletariat' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'the-proletariat' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

	<?php
		else:		 
			if( is_post_type_archive('flyer') ): ?>
				<div class="entry-content flyer-tile">
					<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					 echo the_content(); ?>
					
				</div>
	<?php	endif; ?>
	<?php endif; ?>

	<footer class="entry-footer">
		<?php the_proletariat_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
