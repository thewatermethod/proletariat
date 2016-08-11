<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package the-proletariat
 */

get_header(); 

 if ( get_header_image() ) : ?>
	<img src="<?php header_image(); ?>" alt="Proletariat Home Page Image" style="width: 100%;">
	<?php endif; // End header image check. ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			$query = new WP_Query( array('post_type' => 'post', 'posts_per_page' => '3') );
				while ( $query->have_posts() ) :
				    $query->the_post();	
			?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php
						the_excerpt();

						echo '<p><a href="' . get_the_permalink() . '">Read More</a></p>';

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'the-proletariat' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php
						/*edit_post_link(
							sprintf(
								 translators: %s: Name of current post 
								esc_html__( 'Edit %s', 'the-proletariat' ),
								the_title( '<span class="screen-reader-text">"', '"</span>', false )
							),
							'<span class="edit-link">',
							'</span>'
						);*/
					?>
				</footer><!-- .entry-footer -->
			</article><!-- #post-## -->
			<?php

			endwhile; // End of the loop.
			wp_reset_postdata();
			?>

		</main><!-- #main -->

		<article class="home-page-callouts">
			<h2>Visit Our Store</h2>
			<?php				
				$query = new WP_Query( array('post_type' => 'product', 'posts_per_page' => '1') );

				while ( $query->have_posts() ) :
				    $query->the_post();	
				   	echo '<p><a href="'.get_the_permalink() . '">';
				    the_post_thumbnail();			    	
				    echo '</a></p>';
					echo '<p><a href="'.get_the_permalink() . '">' . get_the_title() . ' - $' . get_post_meta( get_the_ID(), '_regular_price' )[0] .'</a></p>';


				endwhile;
				wp_reset_postdata();

			?>			
		</article>

		<article class="home-page-callouts">
			
			<?php				
				dynamic_sidebar('home-callout-2');

			?>		
		</article>

		<article class="home-page-callouts social">
			
			<?php				
				//dynamic_sidebar('home-callout-3');			

			?>		
			<section id="black-studio-tinymce-3" class="widget widget_black_studio_tinymce"><h2 class="widget-title">On the Web</h2><div class="textwidget"><p style="text-align: center;"><img class="alignnone" src="http://dev.twilitgrotto.com/proletariat/wp-content/uploads/2016/04/prburma1-300x202.jpg" width="300" height="202"></p>
			<a href="https://www.facebook.com/pages/The-Proletariat/103150099725239"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
			<a href="https://open.spotify.com/artist/78qQGbTLtKDHQOEzUkHXJX"><i class="fa fa-spotify" aria-hidden="true"></i></a>			
			<a href="http://www.last.fm/music/The+Proletariat"><i class="fa fa-lastfm" aria-hidden="true"></i></a>
			<p style="text-align: center;"><a href="http://www.pandora.com/music/artist/055aa12eab2ff519">Pandora</a></p>
			</div></section>



		</article>


	</div><!-- #primary -->



<?php
get_sidebar();
get_footer();
