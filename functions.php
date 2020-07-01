<?php
//Enqueue scripts and styles.
if(!function_exists('pluslearning_scripts')):
function pluslearning_scripts() {
    wp_enqueue_style( 'normalize', 'https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/0.5.0/modern-normalize.min.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap-grid.min.css' );
    wp_enqueue_style( 'aos-style', 'https://unpkg.com/aos@2.3.1/dist/aos.css' );
    wp_enqueue_style( 'main-style', get_template_directory_uri().'/style.css', '', '6' );

    wp_enqueue_script( 'fa-all', get_template_directory_uri() . '/js/font-awesome/fontawesome.min.js');
    wp_enqueue_script( 'fa-brands', get_template_directory_uri() . '/js/font-awesome/brands.min.js');
    wp_enqueue_script( 'fa-solid', get_template_directory_uri() . '/js/font-awesome/solid.min.js');
    wp_enqueue_script( 'aos-script','https://unpkg.com/aos@2.3.1/dist/aos.js');
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), '1', true);
}
add_action( 'wp_enqueue_scripts', 'pluslearning_scripts' );
endif;


function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' )
            //'extra-menu' => __( 'Extra Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );