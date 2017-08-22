<?php
/**
 * Template Name: Full-Width
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SBD_Base
 *
 * Add check for sidebar or no sidebar
 */

get_header(); ?>


    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 main-content">
                    <?php
                    while ( have_posts() ) :
                        the_post();

                        get_template_part( 'template-parts/page/content', 'page' );

                    endwhile; // End of the loop.
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
