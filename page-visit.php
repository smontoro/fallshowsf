<?php /* Template Name: Visit */
get_header();

while (have_posts()) :
    the_post();

    $dates_and_hours= get_field('dates_and_hours');
    $dates_hours_image= get_field('dates_hours_image');
    $location= get_field('location');
    $map= get_field('map');
    $getting_there= get_field('getting_there');
    $getting_there_image= get_field('getting_there_image');
    $dining= get_field('dining');
    $dining_image= get_field('dining_image');
    $rules= get_field('rules');
    $rules_image= get_field('rules_image');

    vertoh_include_page_header();
    ?>

    <section class="container page-padding" id="visit">
        <header class="section-header">
            <h2 class="page-title"><?php the_title() ?></h2>
        </header>

        <div id="visit1" class="row">
            <div class="col-sm-6">
                <?php echo $dates_and_hours; ?>
            </div>
            <div class="col-sm-6">
                <img src="<?php echo $dates_hours_image; ?>">
            </div>       
        </div>

        <div id="visit2" class="row">
            <div class="col-sm-6">
                <?php echo $map; ?>
            </div>
            <div class="col-sm-6"> 
                <?php echo $location; ?>
            </div>
        </div>

        <div id="visit3" class="row">
            <div class="col-sm-6">
                <?php echo $getting_there; ?>
            </div>
            <div class="col-sm-6"> 
                <img src="<?php echo $getting_there_image ?>">
            </div>
        </div>

        <div id="visit4" class="row">
            <div class="col-sm-6">
                <img src="<?php echo $dining_image ?>">
                
            </div>
            <div class="col-sm-6"> 
                <?php echo $dining; ?>
            </div>
        </div>

        <div id="visit5" class="row">
            <div class="col-sm-6">
                <?php echo $rules; ?>
            </div>
            <div class="col-sm-6"> 
                <img src="<?php echo $rules_image ?>">
            </div>
        </div>
            
   
    </section>


    <?php
endwhile;
get_footer();
