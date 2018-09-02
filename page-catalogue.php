<?php /* Template Name: Catalogue */
get_header();

while (have_posts()) :
    the_post();

    $video= get_field('video');
    $cat_image= get_field('cat_image');
    $cat_info= get_field('cat_info');
    $cat_description= get_field('cat_description');
    $kit_file= get_field('kit_file');

    vertoh_include_page_header();
    ?>

    <section id="catalogue" class="container page-padding">
         <header class="section-header">
            <h2 class="page-title"><?php the_title() ?></h2>
        </header>

        <div id="cat1" class="row">
            <div class="video col-sm-6 col-sm-push-6">
                <?php echo $video; ?> 
                <p>
                    <?php echo $cat_description; ?>
                </p>
            </div>
            <div class="col-sm-6 col-sm-pull-6">
                <?php the_content(); ?>
            </div>
        </div>

        <div id="cat2" class="row">
            <div class="col-sm-6 col-sm-push-6">
                <img class="image-fluid" src="<?php echo $cat_image; ?>" />
            </div>     
            <div class="col-sm-6 col-sm-pull-6 text-center">
                <strong><p>Download the Advertising Kit for more information.</p></strong>
                <a href="<?php echo $kit_file; ?>'" class="section-button">ADVERTISING KIT</a>
                <?php echo $cat_info; ?>
            </div>     
        </div>
      
    </section>



    <?php
endwhile;
get_footer();
