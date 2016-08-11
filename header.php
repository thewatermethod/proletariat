<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package the-proletariat
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'the-proletariat' ); ?></a>

	<?php 

	wp_reset_postdata();


			$show_query = new WP_Query( array('post_type' => 'show', 'posts_per_page' => '1') );

			if( $show_query->have_posts() ):

				$shows = true;

				while ( $show_query->have_posts() ) :

					$show_query->the_post();

					?>

						<div class="shows" style="">

							<span>New Show Announced:	<a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></span>
							| <span><a href="show">View all announced shows</a>


						</div>

					<?php

				endwhile;

			endif;


		wp_reset_postdata();

	?>

	
	<header id="masthead" class="site-header <?php if($shows): echo "is-shows"; endif;?>" role="banner">
	
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
			<?php else : ?>
				<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
			<?php
			endif;?>

			<a id="menu-toggle-on"><i class="fa fa-bars" aria-hidden="true"></i></a>

	</header><!-- #masthead -->

	<nav id="site-navigation" class="main-navigation" role="navigation">
		<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a><span id="close-menu">X</span></h1>
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
	</nav><!-- #site-navigation -->

	<div id="content" class="site-content <?php if($shows): echo "is-shows"; endif;?>" >
