<?php /* Template Name: Enterprise*/


while (have_posts()) :
    the_post();

    $enterprise_img= get_field('enterprise_img');

    vertoh_include_page_header();
    ?>

       <section id="lectures" class="container section-padding">
            <div class="row">
                <div class="col-sm-6">
                    <div><?php the_content(); ?></div>
                    <a href="http://enterpriseforyouth.org/" target="_blank" class="section-button">Learn More</a>
                </div>
                <div class="col-sm-6">
                    <?php the_post_thumbnail(); ?>
                </div>               
            </div>
    </section>
   


    <?php
endwhile;

