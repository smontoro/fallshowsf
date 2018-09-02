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

    <section id="visit" class="container page-padding">
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
            <div class="col-sm-6 col-sm-push-6"> 
                <?php echo $location; ?>
            </div>
            <div class="map col-sm-6 col-sm-pull-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.2169007850152!2d-122.43241438500132!3d37.808388217998456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858127313943ef%3A0xb83f579746ef207f!2sFestival+Pavilion%2C+38+Fort+Mason%2C+San+Francisco%2C+CA+94123!5e0!3m2!1sen!2sus!4v1535239490665" frameborder="0" style="border:0" allowfullscreen></iframe>
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
            <div class="col-sm-6 col-sm-6-push"> 
                <?php echo $dining; ?>
            </div>
            <div class="col-sm-6 col-sm-6-pull">
                <img src="<?php echo $dining_image ?>">
                
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
