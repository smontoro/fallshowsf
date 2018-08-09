<?php /* Template Name: Catalogue */
get_header();

while (have_posts()) :
    the_post();

    $video= get_field('video');
    $cat_image= get_field('cat_image');
    $cat_info= get_field('cat_info');
    $cat_description= get_field('cat_description');

    vertoh_include_page_header();
    ?>

    <section id="catalogue" class="container page-padding">
         <header class="section-header">
            <h2 class="page-title"><?php the_title() ?></h2>
        </header>

        <div id="catPrimary" class="row">
            <div class="col-sm-6">
                <?php the_content(); ?>
            </div><!--/col-6-->

            <div class="cat-video col-sm-6">
                <?php echo $video; ?> 
                <p>
                    <?php echo $cat_description; ?>
                </p>
            </div>

            <div id="catSecondary" class="row">
                <div class="col-sm-6">
                    <?php echo $cat_info; ?>
                </div>
                <div class="col-sm-6">
                    <img class="image-fluid" src="<?php echo $cat_image; ?>" />
                </div>          
            </div><!--/col-6-->
        </div><!--/row -->
    </section>



    <?php
endwhile;
get_footer();
