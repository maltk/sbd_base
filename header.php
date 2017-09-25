<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SBD_Base
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<!--<link rel="icon" href="../../../../favicon.ico">-->

<?php wp_head(); global $post;?>
</head>

<body <?php body_class(); ?>>

        <!--<a class="skip-link screen-reader-text" href="#content"><?php //esc_html_e( 'Skip to content', 'sbd_base' ); ?></a>-->
        <header class="siteHeader">
            <?php
            $displaySecondNav = get_field('secondary_navigation', 'option');

            // do something with $displaySecondNav
            if ($displaySecondNav) : ?>
            <div class="secondaryNavigation">
                <?php get_template_part( 'template-parts/header/secondary-navigation'); ?>
            </div>
            <?php endif; ?>
            
            <div class="navbar navbar-expand-xl navbar-sbd primaryNavigation">
                <?php if ( get_theme_mod( 'sbd_logo' ) ) : ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" class="navbar-brand" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">

                    <img src="<?php echo get_theme_mod( 'sbd_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">

                </a><?php else : ?>

                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <p class="site-description"><?php bloginfo( 'description' ); ?></p><?php endif; ?>
            
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <?php
				    wp_nav_menu( array(
					    //'menu'              => 'Testing Menu',
					    'theme_location'    => 'primary',
					    'depth'             => 2,
					    'container'         => '',
					    'container_class'   => '',
					    'container_id'      => '',
					    'menu_class'        => 'navbar-nav ml-auto',
					    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					    'walker'            => new wp_bootstrap_navwalker())
				    );
                    ?>
                </div>
            </div>

            
        </header>



        

    <?php if ( is_front_page() ) : ?>
			<?php get_template_part( 'template-parts/heros/front-page', 'hero' ); ?>
		<?php else : ?>
            <?php get_template_part( 'template-parts/header/content-page', 'title' ); ?>
		<?php endif; ?>