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

    <section id="volunteer" class="page-padding container">
        <header class="section-header">
            <h2 class="page-title"><?php the_title() ?></h2>
        </header>

        <div id="volunteerPrimary" class="row">
             <?php the_content(); ?>
        </div>
                
        <div id="volunteerSecondary" class="row">
            <div class="col-sm-6">
                <?php echo $benefits; ?>
                <br>
                <?php echo $volunteer_opportunities; ?>
            </div>
            <div class="col-sm-6">
                <img src="<?php echo $volunteer_image; ?>">
            </div>
        </div>     

        <div id="volunteerTertiary" class="row">
            <?php echo $committees; ?>
        </div>    
        
    </section>

   


    <?php
endwhile;
get_footer();
