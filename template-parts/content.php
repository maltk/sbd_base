<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SBD_Base
 */

?>

<div class="entry-content">
    <?php
    the_content();

    wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sbd_base' ),
        'after'  => '</div>',
    ) );
    ?>
</div><!-- .entry-content -->
