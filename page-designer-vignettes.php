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

    $extra_text=get_field('extra_text');


    vertoh_include_page_header();
    ?>

       <section id="vignettes" class="container section-padding">
            <div class="row">
                <div class="col-sm-12">
                    <?php the_content(); ?>
                    <p class="vignettes-title">
                        <?php echo $designer_vignettes_title; ?>
                    </p>
                </div>
            </div>

            <div id="vignettes1" class="row text-center"> 
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

            <div id="vignettes2" class="row">
                <div class="col-sm-12">
                    <?php echo $extra_text; ?>
               
                    <a href="http://fallshowsf.local/designers-artisans-circle/" class="section-button">SEE THE LIST</a>
                 </div>
            </div>

    
    </section>
   


    <?php
endwhile;

