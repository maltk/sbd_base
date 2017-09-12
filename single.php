<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package SBD_Base
 * 
 * Add check for sidebar or no sidebar
 */

get_header(); ?>

	

    <div class="page">
    <div class="container">
        <div class="row">
            <?php
            get_sidebar();
            ?>
            <div class="col-md-8 main-content">
                <?php
                while ( have_posts() ) :
                    the_post();

                    get_template_part( 'template-parts/content', get_post_format() );

                endwhile; // End of the loop.
                ?>
            </div>
        </div>
    </div>
</div>




<?php
get_footer();
