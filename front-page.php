<?php
/**
 * The front page template file.
 *
 * @package SBD_Base
 */
get_header(); ?>




<div class="page">
    <?php
    // Start Block A
    if(get_field( "block_a" )) :
    ?>
    <!-- Block A -->
    <section class="block-a">
        <div class="container">
            
            <?php
            echo the_field('block_a');
                                    ?>
        </div>
    </section>
    <?php 
    endif;
    //End A
    ?>

    <?php
    // Start Block B
    if(get_field( "block_b" )) :
    ?>
    
    <!-- Block B -->
    <section class="block-b">
        <div class="container">
            <?php
            echo the_field('block_b');
            ?>
            
        </div>
    </section>
    <?php
    endif;
    //End B
    ?>


    <?php
    // Start Block C
    if(get_field( "block_c" )) :
    ?>
    
    <!-- Block C -->
    <section class="block-c">
        <?php
        echo the_field('block_c');
        ?>
    </section>
    <?php
    endif;
    //End C
    ?>


    <?php
    // Start Block D
    if(get_field( "block_d" )) :
    ?>
    
    <!-- Block D -->
    <section class="block-d">
        <?php
        echo the_field('block_d');
        ?>
    </section>
    <?php
    endif;
    //End D
    ?>


    <?php
    // Start Block E
    if(get_field( "block_e" )) :
    ?>

    <!-- Block E -->
    <section class="block-e">
        <div class="container">
            <?php
                echo the_field('block_e');
            ?>
        </div>
    </section>
    <?php
    endif;
    //End E
    ?>

    <?php
    // Start Block F
    if(get_field( "block_f" )) :
    ?>

    <!-- Block F -->
    <section class="block-f">
        <div class="container">
            <?php
                echo the_field('block_f');
            ?>
        </div>
    </section>
    <?php
    endif;
    //End F
    ?>

</div>


<?php
if (locate_template('template-parts/page/content-constant-block.php') != '') :?>
<!-- Constant -->
<div class="constant-block">
    <div class="container">
        <div class="row">
            <?php get_template_part('template-parts/page/content', 'constant-block'); ?>
        </div>
    </div>
</div>
<?php endif; ?>

    


<?php
get_footer();
