<?php
$ef_options        = EF_Event_Options::get_theme_options();
$esc_url_protocols = array('http', 'https', 'feed');
?>
<footer id="site-footer">
    <div class="container">
        <div class="bottom-footer">
            <div class="icons">
                 <?php if (!empty($ef_options['ef_facebook'])) { ?>
                    <a href="<?php echo esc_url($ef_options['ef_facebook'], $esc_url_protocols); ?>" target="_blank" title="Facebook"><i class='fa fa-facebook'></i></a>
                <?php } ?>
                <?php if (!empty($ef_options['ef_instagram'])) { ?>
                    <a href="<?php echo esc_url($ef_options['ef_instagram'], $esc_url_protocols); ?>" target="_blank" title="Instagram"><i class='fa fa-instagram'></i></a>
                <?php } ?>
                <?php if (!empty($ef_options['ef_twitter'])) { ?>
                    <a href="<?php echo esc_url($ef_options['ef_twitter'], $esc_url_protocols); ?>" target="_blank" title="Twitter"><i class='fa fa-twitter'></i></a>
                <?php } ?>
                <?php if (!empty($ef_options['ef_pinterest'])) { ?>
                    <a href="<?php echo esc_url($ef_options['ef_pinterest'], $esc_url_protocols); ?>" target="_blank" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <?php } ?>
                <?php if (!empty($ef_options['ef_youtube'])) { ?>
                    <a href="<?php echo esc_url($ef_options['ef_youtube'], $esc_url_protocols); ?>" target="_blank" title="Youtube"><i class='fa fa-youtube'></i></a>
                <?php } ?>
                <?php if (!empty($ef_options['ef_linkedin'])) { ?>
                    <a href="<?php echo esc_url($ef_options['ef_linkedin'], $esc_url_protocols); ?>" target="_blank" title="Linkedin"><i class='fa fa-linkedin'></i></a>
                <?php } ?>
                <?php if (!empty($ef_options['ef_google_plus'])) { ?>
                    <a href="<?php echo esc_url($ef_options['ef_google_plus'], $esc_url_protocols); ?>" target="_blank" title="Google+"><i class='fa fa-google-plus'></i></a>
                <?php } ?>
                <?php if (!empty($ef_options['ef_email']) && is_email($ef_options['ef_email'])) { ?>
                    <a href="mailto:<?php echo $ef_options['ef_email']; ?>" title="Email"><i class='fa fa-envelope'></i></a>
                <?php } ?>
                <?php if (!empty($ef_options['ef_vimeo'])) { ?>
                    <a href="<?php echo esc_url($ef_options['ef_vimeo'], $esc_url_protocols); ?>" target="_blank" title="Vimeo"><i class='fa fa-vimeo'></i></a>
                <?php } ?>
                <?php if (!empty($ef_options['ef_flickr'])) { ?>
                    <a href="<?php echo esc_url($ef_options['ef_flickr'], $esc_url_protocols); ?>" target="_blank" title="Flickr"><i class='fa fa-flickr'></i></a>
                <?php } ?>
                <?php if (!empty($ef_options['ef_skype'])) { ?>
                    <a href="skype:<?php echo $ef_options; ?>" title="Skype"><i class='fa fa-skype'></i></a>
                <?php } ?>
                <?php if (!empty($ef_options['ef_rss'])) { ?>
                    <a href="<?php echo get_bloginfo('rss_url'); ?>" target="_blank" title="RSS"><i class='fa fa-rss'></i></a>
                    <?php } ?>
                    <p>CONNECT WITH US!</p>
            </div>

            <div class="row widgets">
               <div id="footer-contact"><?php dynamic_sidebar('footer'); ?></div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script type="text/javascript">
    jQuery(window).load(function () {
        jQuery('.carousel-exhibitors').each(function (i, el) {
            jQuery(this).attr('id', 'carousel-exhibitors' + (i + 1));
        });
        jQuery('.carousel-exhibitors .carousel-indicators').each(function () {
            var par_id = jQuery(this).parent('.carousel-exhibitors').attr('id');
            jQuery(this).find('li').attr('data-target', '#' + par_id);
        });
    });
</script>

</body>
</html>