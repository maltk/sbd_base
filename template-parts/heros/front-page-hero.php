<?php
/**
 * Template part for displaying front-page hero
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SBD_Base
 * 
 *  Turn off/on parallax
 *  
 */

?>


<div class="heroWrapper">
    <div class="hero parallax">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-caption text-center"><?php $description = get_bloginfo( 'description', 'display' );
                          if ( $description || is_customize_preview() ) : ?>
                        <h3 class="site-description"><?php echo $description; ?>
                        </h3><?php endif; ?>
                        <h1 class="site-title"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (locate_template('template-parts/header/front-page-hero-cta.php') != '') :?>
    <div class="hero-bottom">
        <div class="container">
            <!-- CTA -->
            <?php get_template_part('template-parts/header/front-page', 'hero-cta'); ?>
        </div>
    </div>
    <?php endif; ?>
</div>
