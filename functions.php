<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

	register_sidebar( array(
	'name' => 'Footer Sidebar 1',
	'id' => 'footer-sidebar-1',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	register_sidebar( array(
	'name' => 'Footer Sidebar 2',
	'id' => 'footer-sidebar-2',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	register_sidebar( array(
	'name' => 'Footer Sidebar 3',
	'id' => 'footer-sidebar-3',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );

/* =======================================
	Custom Post Types
   =======================================
*/
	function create_custom_post_types() {

	register_post_type('cultural-partners',
		array(
			'labels' => array (
				'name' => 'Cultural Partners',
				'singular_name' => 'Cultural Partners'
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array (
				'slug' => 'cultural-partners'
				),
			'supports' => array('title', 'editor', 'thumbnail')
			)
		);
}

/* Replace Text */
add_filter( 'gettext', 'replace_preview_resume_text', 10, 3 );

function replace_preview_resume_text( $translation, $text, $domain ){

    if( $text === 'More info' ) {
        $text = 'JOIN US';
    }

    return $text;
}



?>





