<?php /* Template Name: Florists */
get_header();

while (have_posts()) :
    the_post();

    $florists= get_field('florists');

    vertoh_include_page_header();
    ?>

    <section id="florists" class="page-padding">
        <header class="section-header">
            <h2 class="page-title"><?php the_title() ?></h2>
        </header>

        <div class="container">
            <div id="floristsPrimary" class="row container">
                <div class="col-sm-6">
                    <?php the_content(); ?>
                </div>
            </div>
                
            <div id="floristsSecondary" class="row container col-sm-4">
                <?php echo $florists ?>
            </div>         
        </div>
    </section>

   


    <?php
endwhile;
get_footer();
