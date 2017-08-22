<?php
/**
 * The front page template file.
 *
 * @package SBD_Base
 */
get_header(); ?>




<div class="page">
    <?php
    if(get_field( "preamble" )) :
    ?>
    <!-- preamble -->
    <section class="preamble">
        <div class="container">
            <div class="row">
                <?php
        echo the_field('preamble');
                                       ?>
            </div>
        </div>
    </section>
    <?php 
    endif;
    ?>

    <!-- services -->
    <section class="services">
        <div class="container">
            <div class="row"><?php
                    echo the_field('services');
                    ?>
            </div>
        </div>
    </section>

    <?php
    if(get_field( "payload" )) :
    ?>
    
    <!-- payload -->
    <section class="payload">
        <div class="container-fluid">
            <div class="row row-eq-height">
                <div class="col-sm-6 col-sm-push-6 image-box flush">
                    <figure>
                        <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/coffee.jpg" />
                    </figure>
                </div>
                <div class="col-sm-6 col-sm-pull-6 dark flush content"><?php
                        echo the_field('payload');
                                                                       ?>
                </div>
            </div>
        </div>
    </section>
    <?php
    endif;
    ?>

    <!-- trailer -->
    <section class="trailer">
        <div class="container">
            <div class="row">
                <?php
                echo the_field('trailer');
                ?>
                
            </div>
        </div>
    </section>

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
