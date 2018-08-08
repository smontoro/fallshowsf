<?php
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
    <section class="fullwidth breadcrumbs">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?php echo home_url(); ?>"><?php _e('Designers & Artisans Circle', 'vertoh'); ?></a></li>
                <li class="active"><?php the_title() ?></li>
            </ol>
        </div>
    </section>

    <section class="container" id="designers">
         <header class="section-header">
            <h2><?php the_title() ?></h2>
        </header>

        <div class="row">
            <div class="col-sm-6">
                <?php the_content(); ?>
            </div><!--/col-6-->
            <div class="col-sm-6">
                <div>
                    <?php echo $designers_image; ?> 
                </div>     
            </div><!--/col-6-->
        </div><!--/row -->

        <div class="row">
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
