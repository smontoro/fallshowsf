<?php

/**
Template Name: Press
**/
get_header();

?>

<section id="press" class="container page-padding">
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

        <div class="press-content col-sm-3">
            <div class="tint">
                <?php the_post_thumbnail(); ?>
                <span class="entry-date">
                    <?php echo $press_date; ?>
                </span>
            </div>   

            <div class="press-post-content">
              <h5><?php the_title(); ?></h5>
              <p><?php echo $publisher; ?></p>
           

            <a target="_blank" href="<?php echo $press_link; ?>">
                <p>Read More 
                    <span class="readmore-icon fa-stack fa-sm">
                        <i class="fa fa-circle-thin fa-stack-2x"></i>
                        <i class="fa fa-plus fa-stack-1x"></i>
                    </span>
                </p>
            </a>

             </div>

           

        </div><!--end col-->

        <?php endwhile; ?>
    <?php endif; ?>




    </div><!-- end row -->

</section>


<?php get_footer(); ?>


