<?php /* Template Name: Lecture Series*/


while (have_posts()) :
    the_post();

    $lecture_speakers= get_field('lecture_speakers');
    $lectures_home_img= get_field('lectures_home_img');



    vertoh_include_page_header();
    ?>

       <section id="lectures" class="container padding-bottom">
            <div class="row">
                <div class="col-sm-6">
                    <div><?php the_content(); ?></div>
                    <br>
                    <p>SPEAKERS</p>
                    <div id="lectureSpeakers"><?php echo $lecture_speakers; ?></div>
                    <button>VIEW EVENT SCHEDULE</button>
                </div>
                <div class="col-sm-6">
                    <img class="img-fluid" src="<?php echo $lectures_home_img; ?>">
                </div>               
            </div>

    </section>
   


    <?php
endwhile;

