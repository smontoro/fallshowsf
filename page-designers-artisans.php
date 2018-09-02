<?php /* Template Name: Designers & Artisans Circle */
get_header();

while (have_posts()) :
    the_post();

    $designers_image= get_field('designers_image');
    $designers_title= get_field('designers_tite');
    $row_1_designers= get_field('row_1_designers');
    $row_2_designers= get_field('row_2_designers');
    $row_3_designers= get_field('row_3_designers');


    vertoh_include_page_header();
    ?>

    <section class="container page-padding" id="designers">
            <header class="section-header">
                <h2 class="page-title"><?php the_title() ?></h2>
            </header>

            <div id="designersPrimary" class="row">
                <div class="col-sm-6">
                    <?php the_content(); ?>
                </div><!--/col-6-->
                <div class="col-sm-6">
                    <div>
                        <img class="image-fluid" src="<?php echo $designers_image; ?>">
                    </div>     
                </div><!--/col-6-->
            </div><!--/row -->
   
         

        <div class="row" id="designersSecondary">
            <div class="col-sm-4">
                <?php echo $row_1_designers; ?>
            </div>
            <div class="col-sm-4">
                <?php echo $row_2_designers; ?>
            </div>
            <div class="col-sm-4">
                <?php echo $row_3_designers; ?>
            </div>
        </div>
    </section>


    <?php
endwhile;
get_footer();
