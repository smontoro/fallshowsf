<?php /* Template Name: Designer Vignettes*/


while (have_posts()) :
    the_post();

    $designer_vignettes_title= get_field('designer_vignettes_title');

    $designer_img_1=get_field('designer_img_1');
    $designer_name_1=get_field('designer_name_1');

    $designer_img_2=get_field('designer_img_2');
    $designer_name_2=get_field('designer_name_2');

    $designer_img_3=get_field('designer_img_3');
    $designer_name_3=get_field('designer_name_3');

    $designer_img_4=get_field('designer_img_4');
    $designer_name_4=get_field('designer_name_4');


    vertoh_include_page_header();
    ?>

       <section id="vignettes" class="container padding-bottom">
            <header class="row">
                <?php the_content(); ?>
            </header>
            <div class="row">
                <p class="vignettes-title"><?php echo $designer_vignettes_title; ?></p>
            </div>
            <div class="row text-center"> 
                <div class="col-sm-3">
                    <img class="img-circle" src="<?php echo $designer_img_1; ?>">
                    <p><?php echo $designer_name_1; ?></p>
                </div>
                <div class="col-sm-3">
                    <img class="img-circle" src="<?php echo $designer_img_2; ?>">
                    <p><?php echo $designer_name_2; ?></p>
                </div>
                <div class="col-sm-3">
                    <img class="img-circle" src="<?php echo $designer_img_3; ?>">
                    <p><?php echo $designer_name_3; ?></p>
                </div>
                <div class="col-sm-3">
                    <img class="img-circle" src="<?php echo $designer_img_4; ?>">
                    <p><?php echo $designer_name_4; ?></p>
                </div>
                
            </div>

    
    </section>
   


    <?php
endwhile;

