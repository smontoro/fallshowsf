<?php
$ef_options        = EF_Event_Options::get_theme_options();
$esc_url_protocols = array('http', 'https', 'feed');
?>


    <div id="footer-sidebar1" class="row">
        <div class="col-sm-6">
            <div class="signup">
                <p>Recieve event invitations 
                <br>
                and show news by email</p>
                <p>We send an average of one e-newsletter a month</p>
            </div>
            
        </div>
        <div class="col-sm-6">
            <div class="signup">
                <?php
                if(is_active_sidebar('footer-sidebar-1')){
                dynamic_sidebar('footer-sidebar-1');
                }
            ?>
            </div>
        </div>
    </div>
    
   
    <div id="footer-sidebar2">
        <div class="col-sm-6">
            <?php
                if(is_active_sidebar('footer-sidebar-2')){
                dynamic_sidebar('footer-sidebar-2');
                }
            ?>
            <p>CONNECT WITH US!</p>
        </div>
    </div>

    <div id="footer-sidebar3">
        <?php
                if(is_active_sidebar('footer-sidebar-3')){
                dynamic_sidebar('footer-sidebar-3');
                }
            ?>
    </div>



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