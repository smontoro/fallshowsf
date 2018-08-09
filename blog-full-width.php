<section class="content">

    <div class="container">

        <?php
        if (have_posts()) :
            $count = 0;
            $date_format = get_option('date_format');
            ?>

            <div class="row featured-post">
                <?php
                while (have_posts()) :
                    if (++$count < 4):
                        the_post();
                        ?>
                        <div class="col-sm-<?php echo ($count == 1) ? '6' : '3'; ?>">
                            <div class="entry">
                                <div class="entry-image with-date">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('vertoh-blog-full-first'); ?>
                                    </a>
                                    <span class="entry-date"><?php the_time($date_format); ?></span>
                                </div>
                                <h2 class='entry-title'><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <p class="entry-excerpt"><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="read-more-link">
                                    <?php _e('Read more', 'vertoh'); ?>
                                    <span class="readmore-icon fa-stack fa-sm">
                                        <i class="fa fa-circle-thin fa-stack-2x"></i>
                                        <i class="fa fa-plus fa-stack-1x"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <?php
                    else:
                        break;
                    endif;
                endwhile;
                ?>
            </div>
            <?php if ($count >= 4) { ?>
                <div class="row">
                    <?php
                    while (have_posts()) :
                        the_post();
                        ?>
                        <div class="col-sm-3">
                            <div class="entry">
                                <div class="entry-image with-date">
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('vertoh-blog-full-first'); ?></a>
                                    <span class="entry-date"><?php the_time($date_format); ?></span>
                                </div>
                                <h2 class='entry-title'><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <p class="entry-excerpt"><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="read-more-link">
                                    <?php _e('Read more', 'vertoh'); ?>
                                    <span class="readmore-icon fa-stack fa-sm">
                                        <i class="fa fa-circle-thin fa-stack-2x"></i>
                                        <i class="fa fa-plus fa-stack-1x"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php } ?>
        <?php else : ?>
            <?php _e('Nothing Found', 'vertoh'); ?>
        <?php endif; ?>
    </div>
</section>