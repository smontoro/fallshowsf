<?php
get_header();
vertoh_include_page_header();

global $wp_query;
?>
<section class="container fullwidth" id="blog">
    <header class="section-header">
    	<h2 class="page-title"><?php single_cat_title(); ?></h2>
    </header>
</section>
<?php
vertoh_include_page_layout();

echo vertoh_pagination($paged, $wp_query->max_num_pages);

get_footer();
