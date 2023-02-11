<?php
/**
* Class custom post type and taxonomy
*/
class Fx_Post
{
	
	function __construct()
	{
        // add_action('init',array($this, 'fx_create_type_services'));
        // add_action('init',array($this, 'fx_add_taxonomy_services'));
	}
    
    /**
	* Create the new Post type Service
	*/
	public function fx_create_type_services() {
		$labels = array(
			'name'                => __( 'Dịch vụ nha khoa', 'flex-theme' ),
			'singular_name'       => __( 'Dịch vụ nha khoa', 'flex-theme' ),
			'menu_name'           => __( 'Dịch vụ nha khoa', 'flex-theme' ),
			'name_admin_bar'      => __( 'Dịch vụ nha khoa',  'flex-theme' ),
			'add_new'             => __( 'Add New', 'flex-theme' ),
		);
	 
		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array('slug' => 'dich-vu'),
			'capability_type'    => 'post',
            'has_archive'        => true,
			'hierarchical'       => true,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
		);
		register_post_type( 'services', $args );
	}

	function fx_add_taxonomy_services() {
		$labels = array(
			'name' => 'Chuyên mục',
			'singular' => 'Chuyên mục',
			'menu_name' => 'Chuyên mục'
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
		);
		register_taxonomy('chuyen-muc-dich-vu', 'services', $args);
	}
}

global $fx_post;
$fx_post = new Fx_Post();