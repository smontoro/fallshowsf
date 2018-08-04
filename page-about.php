<?php
get_header();



while (have_posts()) :
    the_post();

    $chair_year= get_field('chair_year');

    $chair_1= get_field('chair_1');
    $chair_1_name= get_field('chair_1_name');

    $chair_2= get_field('chair_2');
    $chair_2_name= get_field('chair_2_name');

    $chair_3= get_field('chair_3');
    $chair_3_name= get_field('chair_3_name');

    $chair_4= get_field('chair_4');
    $chair_4_name= get_field('chair_4_name');

    $gala_committee_year= get_field('gala_committee_year');
    $gala_committee_names_left= get_field('gala_committee_names_left');
    $gala_committee_names_right= get_field('gala_committee_names_right');

    $founders_title= get_field('founders_title');
    $founder_names= get_field('founder_names');

    $past_show_chairs_title= get_field('past_show_chairs_title');
    $past_show_chairs_names= get_field('past_show_chairs_names');

    $staff_title= get_field('staff_title');
    $staff_info= get_field('staff_info');

    $office_info_title= get_field('office_info_title');
    $office_address= get_field('office_address');




    vertoh_include_page_header();
    ?>
    <section class="fullwidth breadcrumbs">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?php echo home_url(); ?>"><?php _e('About', 'vertoh'); ?></a></li>
                <li class="active"><?php the_title() ?></li>
            </ol>
        </div>
    </section>
    <section class="content" id="about">
        <div class="container">
            <header class="section-header">
                <h2><?php the_title() ?></h2>
            </header>
            <?php the_content(); ?>
        </div>

        <div class="container about-chairs">
            <div>
                <h5><?php echo $chair_year; ?></h5>
                <hr>
            </div>  
            <div>
                <h6><?php echo $chair_1; ?></h6>
                <p><?php echo $chair_1_name; ?></p>
            </div> 
            <div>
                <h6><?php echo $chair_2; ?></h6>
                <p><?php echo $chair_2_name; ?></p>
            </div>   
            <div>
                <h6><?php echo $chair_3; ?></h6>
                <p><?php echo $chair_3_name; ?></p>
            </div> 
            <div>
                <h6><?php echo $chair_4; ?></h6>
                <p><?php echo $chair_4_name; ?></p>
            </div> 
            <div>
                <h6><?php echo $chair_5; ?></h6>
                <p><?php echo $chair_5_name; ?></p>
            </div> 
        </div>

        <div class="container about-gala">
            <div>
                <h5><?php echo $gala_committee_year; ?></h5>
                <hr>
                <div><?php echo $gala_committee_names_left; ?></div>
                <div><?php echo $gala_committee_names_right; ?></div>
            </div>
        </div>

        <div class="container about-founders">
            <div>
                <h5><?php echo $founders_title; ?></h5>
                <hr>
                <div><?php echo $founder_names; ?></div>
            </div>
        </div>

        <div class="container about-past-show-chairs">
            <div>
                <h5><?php echo $past_show_chairs_title; ?></h5>
                <hr>
                <div><?php echo $past_show_chairs_names; ?></div>
            </div>
        </div>

        <div class="container about-staff">
            <div>
                <h5><?php echo $staff_title; ?></h5>
                <hr>
                <div><?php echo $staff_info; ?></div>
            </div>
        </div>

        <div class="container about-office">
            <div>
                <h5><?php echo $office_info_title; ?></h5>
                <hr>
                <div><?php echo $office_address; ?></div>
            </div>
        </div>



    </section>
    <?php
endwhile;
get_footer();
