<?php
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');

//register_sidebar(); //tänk resister_nav_menu()
//dynamic_sidebar(); //tänk wp_nav_menu

add_action('after_setup_theme', 'registrerar_meny');

function registrerar_meny(){
    register_nav_menu( 'huvudmeny' , 'Huvudmeny' );
    register_nav_menu('footermeny', 'meny placerad i footer');
} 
//wp_enqueue_style( 'stil', get_template_directory_uri() . '/css/style.css');

add_action('wp_enqueue_scripts', 'add_js_and_css' );
function add_js_and_css(){
    wp_enqueue_style( 'font', get_template_directory_uri() . '/css/font-awesome.css');
    wp_enqueue_style( 'boot', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style("theme_style", get_template_directory_uri(). "/css/style.css");
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/jquery.js', array ( 'jquery' ), 1.1, true);
    
};
//wp_enqueue_scripts();
add_action('wp_footer','add_js');
function add_js(){
    wp_enqueue_script( 'js', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);

}

?>