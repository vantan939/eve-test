<?php
/**
 * The Theme Header
 * @package flex-theme
 */

?>

<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta name="format-detection" content="telephone=no">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@100;300;400;500;700&display=swap" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="wrapper">
		<?php do_action('before'); ?>
		
		<header>
            <div class="main-nav">
                <div class="container">
                    <div class="main-nav-logo">
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php echo get_field('logo_header', 'option'); ?>" alt="">
                        </a>
                    </div>
                    <div class="main-nav-menu only-pc">
                        <div class="main-nav-menu-list">
                            <?php 
                                wp_nav_menu( array(
                                    'theme_location' => 'primary'
                                ) );
                            ?>
                        </div>
                    </div>
                    <div class="main-nav-btn-mobile only-sp">
                        <div class="main-nav-btn-mobile-open">
                            <img src="<?php echo THEME_IMAGES; ?>/common/icon-mobile.svg" width="27px" alt="">
                        </div>						
                    </div>
                </div>
            </div>

            <div class="mobile-menu">
                <div class="mobile-menu-close">
                    <div class="main-nav-btn-mobile-close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </div>
                </div>
                <div class="container">
                    <?php 
                        wp_nav_menu( array(
                            'theme_location' => 'primary'
                        ) );
                    ?>
                </div>
            </div>
        </header>