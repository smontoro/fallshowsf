<?php /* Template Name: Tickets */
get_header();

while (have_posts()) :
    the_post();

    $gala= get_field('gala');
    $show_days= get_field('show_days');
    $gala_ticket_link= get_field('gala_ticket_link');
    $show_day_link= get_field('show_day_link');

    vertoh_include_page_header();
    ?>

    <section class="container page-padding" id="tickets">
        <header class="section-header">
            <h2 class="page-title"><?php the_title() ?></h2>
        </header>

        <div id="tickets1" class="row">

                <div class="col-sm-6">
                    <?php echo $gala; ?>
                        <a href="<?php echo $gala_ticket_link; ?>" target="_blank" class="section-button">PURCHASE GALA TICKETS</a>
                </div>


                <div class="col-sm-6">
                    <?php echo $show_days; ?>
                   
                        <a href="<?php echo $show_day_link; ?>" target="_blank" class="section-button">SHOW & LECTURE TICKETS</a>
                    
                    
                </div>
         
            
        </div>

        <div id="tickets2">
            <?php the_content(); ?>
        </div>
            
   
    </section>


    <?php
endwhile;
get_footer();
