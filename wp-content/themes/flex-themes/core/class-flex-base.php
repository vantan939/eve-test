<?php

/**
* Class Flex main site
*/
class Fx_Base 
{
    
    function __construct()
    {
        add_action('init',array($this, 'fx_theme_support'));
        add_action('wp_enqueue_scripts',array($this, 'fx_theme_add_scripts'));
        // add_action('widgets_init', array($this, 'fx_theme_witget_init'));
    }

    /*
    * Theme Add css and js
    */
    public function fx_theme_add_scripts()
    {
        global $wp_scripts;
        wp_enqueue_script('jquery');

        /*owl-carousel*/
        // wp_enqueue_style('owl-css',THEME_URL_LIBS.'owl/assets/owl.carousel.min.css',array(),'2.0');
        // wp_enqueue_script('owl-js',THEME_URL_LIBS.'owl/owl.carousel.min.js', array(), '2.0', true);

        /* font awesome */
        wp_enqueue_style('fontawesome-css',THEME_URL_LIBS.'font-awesome/css/font-awesome.min.css',array(),'2.0');

        /* Fancybox */
        // wp_enqueue_style('fancybox-css',THEME_URL_LIBS.'fancybox/jquery.fancybox.min.css',array(),'2.0');
        // wp_enqueue_script('fancybox-js',THEME_URL_LIBS.'fancybox/jquery.fancybox.min.js', array(), '2.0', true);

        /* Style Themes */
        wp_enqueue_script('fl-script', THEME_URL_ASSETS.'js/script.js', array(),false,true);
        wp_enqueue_style('fl-css', THEME_URL_ASSETS.'css/main.css', array(),THEME_VER);
        wp_enqueue_style('theme-style', THEME_URL.'/style.css');
    }

    /*
    * Add theme support
    */
    public function fx_theme_support() 
    {        
        // Adds title tag
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
        add_theme_support('automatic-feed-links' );
        add_theme_support('post-formats',array( 'video', 'audio' , 'gallery', 'link', 'quote',));
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'flex-theme'),
            'footer' => __('Footer Menu', 'flex-theme'),
        ));
        

        remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
        remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
        add_filter( 'wp_get_attachment_image_attributes', function( $attr ){
            if( isset( $attr['class'] )  && 'custom-logo' === $attr['class'] )
                $attr['class'] = 'custom-logo img-responsive';
            return $attr;
        });
        add_filter('widget_text', 'do_shortcode');
        add_filter( 'login_headerurl',function(){ return home_url(); });
        add_filter( 'login_headertitle',function(){ return get_bloginfo('name'); });
    }

    /*
    * Add witget
    */
    public function fx_theme_witget_init() 
    {
        register_sidebar(array(
            'name'          => __('Sidebar left', 'flex-theme'),
            'id'            => 'sidebar-left',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ));

    }

}

global $fx_base;
$fx_base = new Fx_Base();