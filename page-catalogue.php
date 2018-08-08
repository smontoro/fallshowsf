<?php /* Template Name: Catalogue */
get_header();

while (have_posts()) :
    the_post();

    $video= get_field('video');
    $cat_image= get_field('cat_image');

    vertoh_include_page_header();
    ?>

    <section class="container page-margin" id="catalogue">
         <header class="section-header">
            <h2><?php the_title() ?></h2>
        </header>

        <div class="row">
            <div class="col-sm-6">
                <?php the_content(); ?>
            </div><!--/col-6-->

            <div class="col-sm-6">
                <div class="cat-video">
                    <?php echo $video; ?> 
                </div>
                <div>
                    <img src="<?php echo $cat_image; ?>" />
                </div>          
            </div><!--/col-6-->
        </div><!--/row -->
    </section>



    <?php
endwhile;
get_footer();
