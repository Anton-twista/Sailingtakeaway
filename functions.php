<?php 
add_action( 'wp_enqueue_scripts', 
function() {
	
	
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );	
	wp_enqueue_style( 'med', get_template_directory_uri() . '/assets/css/media.css' );
	
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js');
	
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'faq', get_template_directory_uri() . '/assets/js/faq.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'gallery', get_template_directory_uri() . '/assets/js/gallery.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'itc-slider', get_template_directory_uri() . '/assets/js/itc-slider.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), 'null', true );
	
	
});


add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );

    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'media',
        'style',
        'script',
    ]);
function sailingtakeaway_scripts()
{
    wp_enqueue_style(
        'sailingtakeaway-style',
        get_stylesheet_uri(),
        [],
        _S_VERSION
    );
    wp_style_add_data('sailingtakeaway-style', 'rtl', 'replace');

    wp_enqueue_script(
        'sailingtakeaway-navigation',
        get_template_directory_uri() . '/js/navigation.js',
        [],
        _S_VERSION,
        true
    );

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}



?>