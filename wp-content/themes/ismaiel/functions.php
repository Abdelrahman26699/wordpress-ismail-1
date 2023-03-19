<?php
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';


function Abdelrahman_add_support(){
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' ); 
    add_theme_support( 'post-thumbnails' );
 

}
add_action('after_setup_theme','Abdelrahman_add_support');

function Abdelrahman_add_styles() {    
    $version = wp_get_theme()->get('version');
    wp_enqueue_style( 'Quean-css', get_template_directory_uri(). '/style.css', array() ,"$version", "all" );
    wp_enqueue_style( 'Quran-bootstrab-css', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css", array() ,"4.4.1", "all" );
    wp_enqueue_style( 'Quean-font-awsome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array() ,"5.13.0", "all" );
    wp_enqueue_style( 'carousel', get_template_directory_uri(). '/assets/css/owl.carousel.min.css', array(), false, false );     
    wp_enqueue_style( 'swiper.css', "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css", array(), false, false );
    wp_enqueue_style( 'AOS.css', "https://unpkg.com/aos@2.3.1/dist/aos.css", array(), false, false );

          
}

add_action( 'wp_enqueue_scripts', 'Abdelrahman_add_styles' );

function Abdelrahman_add_scripts() {    
    wp_enqueue_script( 'Quran-bootst-jq', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array() ,"3.4.1", true );
    wp_enqueue_script( 'Quran-popper-js', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js", array() ,"1.16.0", true );
    wp_enqueue_script( 'Quran-bootstrab-js',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" , array() ,"4.4.1", true );
    wp_enqueue_script( 'carousel-js', get_template_directory_uri(). '/assets/js/owl.carousel.min.js' ,array(),false , true );
    wp_enqueue_script( 'swiper-js', "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js",array(),false , true );
    if(is_page(5)){
            wp_enqueue_script( 'main-js', get_template_directory_uri(). '/assets/js/main.js', array(), false   ,true );

    }
    wp_enqueue_script( 'AOS-js', "https://unpkg.com/aos@2.3.1/dist/aos.js",array(),false , true );
    wp_enqueue_script( 'app-js', get_template_directory_uri(). '/assets/js/app.js', array(), false, true );
    wp_enqueue_script( 'main-js', get_template_directory_uri(). '/assets/js/main.js', array(), false   ,true );



}

add_action( 'wp_enqueue_scripts', 'Abdelrahman_add_scripts' );

function Quran_register_custom_menu(){
    
    
    register_nav_menus(array(
        'bootstrap-menu' => 'Navigation Bar',
        'footer-menu'    => 'Footer Menu'
    )) ;
}
add_action('init','Quran_register_custom_menu');

function Quran_register_custom_footer_menu(){
    
    
    register_nav_menus(array(
        'bootstrap-menu' => 'Navigation Bar',
        'footer-menu'    => 'Footer Menu'
    )) ;
}
add_action('init','Quran_register_custom_footer_menu');





// register sidebar 
function blog_main_sidebar() {
    //register_sidebar 
    register_sidebar(array(

        'name'          =>  'Main Sidebar',
        'id'            =>  'main-sidebar',
        'description'   =>  'Main Sidebar Appear Everywhere',
        'class'         =>  'main-sidebar',
        'before_widget' =>  '<div class="widget-content">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h3    class="widget-title">',
        'after_title'   =>  '</h3',
    ));
 } 
 add_action('widgets_init','blog_main_sidebar');
 add_filter('use_widgets_block_editor','__return_false');

// register sidebar 
function blog_main_sidebar_second() {
    //register_sidebar 
    register_sidebar(array(

        'name'          =>  'Main Sidebar-1',
        'id'            =>  'main-sidebar-1',
        'description'   =>  'Main Sidebar Appear Everywhere',
        'class'         =>  'main-sidebar-1',
        'before_widget' =>  '<div class="widget-content">',
        'after_widget'  =>  '</div>',
       
        'after_title'   =>  '</h3',
    ));
 } 
 add_action('widgets_init','blog_main_sidebar_second');
 add_filter('use_widgets_block_editor','__return_false');

 function blog_main_sidebar_third() {
    //register_sidebar 
    register_sidebar(array(

        'name'          =>  'Main Sidebar-2',
        'id'            =>  'main-sidebar-2',
        'description'   =>  'Main Sidebar Appear Everywhere',
        'class'         =>  'main-sidebar-1',
        'before_widget' =>  '<div class="widget-content">',
        'after_widget'  =>  '</div>',
        
        'after_title'   =>  '</h3',
    ));
 } 
 add_action('widgets_init','blog_main_sidebar_third');
 add_filter('use_widgets_block_editor','__return_false');
 function blog_main_sidebar_fourth() {
    //register_sidebar 
    register_sidebar(array(

        'name'          =>  'Main Sidebar-3',
        'id'            =>  'main-sidebar-3',
        'description'   =>  'Main Sidebar Appear Everywhere',
        'class'         =>  'main-sidebar-1',
        'before_widget' =>  '<div class="widget-content">',
        'after_widget'  =>  '</div>',
        
        'after_title'   =>  '</h3',
    ));
 } 
 add_action('widgets_init','blog_main_sidebar_fourth');
 add_filter('use_widgets_block_editor','__return_false');

 

function abdelrahman_extend_excerpt_length($length){
    if (is_author()){
        return 30;
    } else {
        return 25;
    }
}
add_filter('excerpt_length', 'abdelrahman_extend_excerpt_length');

// function abdelrahman_extend_excerpt_dots($more){
//     return '...';
// }
// add_filter('excerpt_length', 'abdelrahman_extend_excerpt_dots');

 if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); 


// numpring pagination 
// function numbering_pagination() {

//     global $wp_query; //
//     $all_pages = $wp_query->max_num_pages; //get all posts 
//     $current_page = max(1, get_query_var('paged')); //get curanr page
//     if ($all_pages > 1) {
//         return  paginate_links(array(
//             'base'    =>  get_pagenum_link() '%_%' ,
//             'format'  =>  '/page/%#%',
//             'current' =>  $current_page,
//             'total'   => $all_pages

//         ));
//     }
    
// }



?>