<?php

/**
Template Name: Press
**/
get_header();

?>

<section class="press container page-padding">
    <header class="section-header">
        <h2 class="page-title"><?php the_title() ?></h2>
    </header>
    <div class="row">
            <?php 
            $args = array (
                'post_type' =>'press',
            );

            $the_query = new WP_Query($args);
            ?>

            <?php if ($the_query->have_posts() ): while ($the_query->have_posts() ):$the_query->the_post(); 

            $press_link= get_field('press_link');
            $publisher = get_field('publisher');
            $press_date = get_field('press_date');
          

            ?>

        <div class="items">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

                <div class="press-entry">

                    <div>
                        <?php the_post_thumbnail(); ?>
                    </div>

                    <div class="press-post-content">

                        <h2 class="press-title">
                            <?php the_title(); ?>
                        </h2>
                        <p class="press-text">
                            <?php echo $publisher; ?>
                        </p>
                    </div>

                    <a class="read-more-link" target="_blank" href="<?php echo $press_link; ?>">Read more
                        <span class="readmore-icon fa-stack fa-sm">
                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                            <i class="fa fa-plus fa-stack-1x"></i>

                        </span>

                    </a>
                </div>


            </div>
        </div>

        <?php endwhile; ?>
    <?php endif; ?>




    </div><!-- end row -->

</section>


<?php get_footer(); ?>


