<?php


add_action( 'wp_enqueue_scripts', 'timber_style' );
add_action( 'wp_enqueue_scripts', 'timber_scripts' );

function timber_style() {
    //подключаем normalize.css
    wp_enqueue_style( 'normalize-style', get_template_directory_uri() .'/assets/css/normalize.css/');
    //подключаем magnific
    wp_enqueue_style( 'magnific-style', get_template_directory_uri() .'/assets/css/magnific-popup.css/');
    //подключаем style.css который находится в корне
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}

// подключение скриптов
// function timber_scripts() {
//     wp_deregister_script( 'jquery' );
//     wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
//     wp_enqueue_script( 'jquery' );
//     wp_enqueue_script( 'magnific-script', get_template_directory_uri() .'/assets/js/jquery.magnific-popup.min.js', array(jquery), null, true );

//     wp_enqueue_script( 'main-script', get_template_directory_uri() .'/assets/js/main.js', array(jquery), null, true );
// }