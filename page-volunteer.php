<?php /* Template Name: Volunteer */
get_header();

while (have_posts()) :
    the_post();

    $volunteer_image= get_field('volunteer_image');
    $benefits= get_field('benefits');
    $volunteer_opportunities= get_field('volunteer_opportunities');
    $committees= get_field('committees');


    vertoh_include_page_header();
    ?>

    <section id="volunteer" class="page-padding">
        <header class="section-header">
            <h2 class="page-title"><?php the_title() ?></h2>
        </header>

        <div class="container">
            <div id="volunteerPrimary" class="row container">
                 <?php the_content(); ?>
            </div>
        </div>
                
        <div id="volunteerSecondary" class="row container col-sm-4">
            <div class="col-sm-6">
                <?php echo $benefits; ?>
            </div>
            <div class="col-sm-6">
                <img src="<? echo $volunteer_image; ?>">
            </div>
        </div>         
        
    </section>

   


    <?php
endwhile;
get_footer();
