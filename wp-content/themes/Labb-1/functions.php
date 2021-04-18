<?php
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');
//add_theme_support ('title-tag');

register_sidebar(array(
    "name"=>"Sidomeny Blogg",
    "id"=>"sidemenu"
));
register_sidebar(array(
    "name"=>"Footer meny",
    "id"=>"footermenu"
));
register_sidebar(array(
    "name"=>"Footer meny 2",
    "id"=>"footermenu2"
));
register_sidebar(array(
    "name"=>"Footer meny 3",
    "id"=>"footermenu3"
));


// Ändra längda på sammanfattning
 function new_excerpt_length($length) {
    return 30;
    }
    add_filter('excerpt_length', 'new_excerpt_length');
     
    // Ändra text efter sammanfattning
    function new_excerpt_more($more) {
    return '...';
    }
    add_filter('excerpt_more', 'new_excerpt_more'); 

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );
//Ta bort standardstorlek på bild från wordpress
function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
        $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
        return $html;
 }

add_action('after_setup_theme', 'registrerar_meny');
add_action('after_setup_theme', 'easy_title');

function add_link_atts($atts) {
    $atts['class'] = "side-menu";
return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_link_atts');

function easy_title(){
    add_theme_support( 'title-tag' );
}

function registrerar_meny(){
    register_nav_menu( 'huvudmeny' , 'Huvudmeny' );
    register_nav_menu('sidomeny', 'Meny i undersidor');
    register_nav_menu('sidemenu', 'Meny i Blogg');
} 


add_action('wp_enqueue_scripts', 'add_js_and_css' );
function add_js_and_css(){
    wp_enqueue_style( 'font', get_template_directory_uri() . '/css/font-awesome.css');
    wp_enqueue_style( 'boot', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style("theme_style", get_template_directory_uri(). "/css/style.css");
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/jquery.js', array ( 'jquery' ), 1.1, true);
    
};

add_action('wp_footer','add_js');
function add_js(){
    wp_enqueue_script( 'js', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);

}

?>