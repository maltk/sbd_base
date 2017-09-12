<?php
/**
 * The template for displaying all pages
 * 
 * (test)
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
                <?php
                get_sidebar();
                ?>
                <div class="col-lg-8 main-content">
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
