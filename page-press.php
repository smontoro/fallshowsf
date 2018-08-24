<?php

/**
Template Name: Press
**/
get_header();

?>

<section id="press" class="container">
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
            $press_file = get_field('press_file');
          

            ?>

        <div class="press-content col-sm-3">
            
           <?php the_post_thumbnail(); ?>

            <div class="press-post-content">
              <h5><?php the_title(); ?></h5>
              <p><?php echo $publisher; ?></p>
            </div>

            <a target="_blank" href="<?php echo $press_link; ?>"><p>Read More >></p></a>

        </div><!--end col-->

        <?php endwhile; ?>
    <?php endif; ?>




    </div><!-- end row -->

</section>


<?php get_footer(); ?>


