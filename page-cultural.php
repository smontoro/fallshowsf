<?php /* Template Name: Cultural Partners */
get_header();

while (have_posts()) :
    the_post();

    $florists= get_field('florists');

    vertoh_include_page_header();
    ?>

<section class="page-padding">

    <header class="section-header" id="cultural">
        <h2 class="page-title"><?php the_title() ?></h2>
            <?php the_content(); ?>
    </header>


        <div class="container" id="culturalPrimary">
                   <?php 
                    query_posts(array( 
                        'post_type' => 'cultural-partners',
                        'showposts' => 100 
                    ) );  
                ?>

               <?php while (have_posts()) : the_post(); ?>
                    <div class="col-sm-3">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php endwhile;?>
                <?php wp_reset_query(); ?>       

        </div>

</section>


    <?php
endwhile;
get_footer();