<?php 

/*
* Base class theme 
* add css and js theme support menu and widgets
*/
if (!class_exists( 'Fx_Base' ) ) {
	require_once THEME_CORE.'class-flex-base.php';
}

/**
* Class custom post type and taxonomy
*/
if (!class_exists( 'Fx_Post' ) ){
	require_once THEME_CORE.'class-custom-post.php';
}

/* Add on custom on theme */
require_once THEME_ADDON.'flduplicate.php';


/** Template functions */
require_once THEME_CORE. 'template-functions.php';
require_once THEME_CORE. 'template-shortcode.php';
