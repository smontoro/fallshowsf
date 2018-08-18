<?php /* Template Name: Enterprise*/


while (have_posts()) :
    the_post();

    $enterprise_img= get_field('enterprise_img');

    vertoh_include_page_header();
    ?>

       <section id="lectures" class="container padding-bottom">
            <div class="row">
                <div class="col-sm-6">
                    <div><?php the_content(); ?></div>
                </div>
                <div class="col-sm-6">
                    <?php the_post_thumbnail(); ?>
                </div>               
            </div>
    </section>
   


    <?php
endwhile;

