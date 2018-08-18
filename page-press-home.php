<?php /* Template Name: Press */
get_header();

while (have_posts()) :
    the_post();

    // $florists= get_field('florists');

    vertoh_include_page_header();
    ?>

<section class="page-padding">

    <header class="section-header">
        <h2 class="page-title"><?php the_title() ?></h2>
            
    </header>


        <div class="container">
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