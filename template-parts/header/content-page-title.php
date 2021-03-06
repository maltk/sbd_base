<?php
/**
 * Template part for displaying page title
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SBD_Base
 */

?>


<?php 

global $post;
$imagePath = get_field('page_title_image_url',$post->ID);

//echo $post->ID;

//echo get_field('page_title_image_url',$post->ID);

?>

<div class="page-header" <?php if(get_field('page_title_image_url')) { echo "style=background-image:url('{$imagePath}');"; }?>>
    <div class="container">
        <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
        <?php
        if(get_field("sub-heading") ) : ?>
            <small><?php the_field("sub-heading");?></small>
        <?php
        endif;
        ?>
    </div>
</div>

