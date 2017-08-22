<?php
/**
 * Template part for displaying page title
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SBD_Base
 */

?>


<div class="page-header">
    <div class="container">
        <!--<h1>Page Title</h1>
        <small>Subheading</small>-->
        <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
        <?php
        if(get_field("sub-heading") ) : ?>
            <small><?php the_field("sub-heading");?></small>
        <?php
        endif;
        ?>
    </div>
</div>
