<?php
$ef_options        = EF_Event_Options::get_theme_options();
$esc_url_protocols = array('http', 'https', 'feed');
?>

<footer>
  

        <div id="footer-sidebar1" class="container-fluid row">
            <div class="col-sm-6">
                <p>Recieve event invitations 
                    <br>
                and show news by email</p>
                <p>We send an average of one e-newsletter a month</p>
            </div>
            <div class="col-sm-6">
                <?php
                    if(is_active_sidebar('footer-sidebar-1')){
                    dynamic_sidebar('footer-sidebar-1');
                    }
                ?>
            </div>
        </div>

        <div id="footer-sidebar2">
        <?php
        if(is_active_sidebar('footer-sidebar-2')){
        dynamic_sidebar('footer-sidebar-2');
        }
        ?>
        </div>

        <div id="footer-sidebar3">
        <?php
        if(is_active_sidebar('footer-sidebar-3')){
        dynamic_sidebar('footer-sidebar-3');
        }
        ?>
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