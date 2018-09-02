<?php /* Template Name: Lectures*/


while (have_posts()) :
    the_post();

    $speakers= get_field('speakers');
    $image= get_field('image');



    vertoh_include_page_header();
    ?>

       <section id="lectures" class="container section-padding">
            <div class="row">
                <div class="col-sm-6">
                    <div><?php the_content(); ?></div>
                    <br>
                    <p>SPEAKERS</p>
                    <div id="lectureSpeakers"><?php echo $speakers; ?></div>
                    <a class="section-button">VIEW EVENT SCHEDULE</a>
                </div>
                <div class="col-sm-6">
                    <img class="img-fluid" src="<?php echo $image; ?>">
                </div>               
            </div>

    </section>
   


    <?php
endwhile;

