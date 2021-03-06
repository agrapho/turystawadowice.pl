<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title><?php wp_title('|', true, 'left'); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="clearfix">
	
	<header id="branding">
            <div class="background-image"></div>

            <div class="background-gradient">
              <hgroup id="blog-title" class="with-margin">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
		<img src="<?php echo get_stylesheet_directory_uri()."/images/logo.png"; ?>" alt="" /></a>
		<div id="header-contact-wrapper">
                    <div id="header-contact">
			<ul>
				<li>tel./fax 33 82 346 43</li>
				<li>tel. 33 87 205 13</li>
				<li>tel. 504 903 357</li>
				<li>tel. 660 089 661</li>
			</ul>
                    </div>
		</div>
	      </hgroup>
            </div>
            <nav id="main-menu-offer" class="clearfix">
                <div class="with-margin">
		    <a href="/wycieczka/wadowice">Zapraszamy do Wadowic!</a>
                </div>
            </nav><!-- #main-menu-offer -->
	    <nav id="main-menu" class="clearfix">
                <div class="with-margin">
		    <?php wp_nav_menu( array( 'theme_location' => 'main-menu') ); ?>
                </div>
            </nav><!-- #main-menu -->
            <div id="facebook-link">
                <a href="https://www.facebook.com/pages/Turysta-Wadowice/957693874262966"><img src="<?php echo get_stylesheet_directory_uri()."/images/facebook-logo.png"; ?>" alt="" /></a>
            </div>
	</header><!-- #branding -->

	<div id="background">
            <img src="<?php if (is_front_page()) {
                                echo get_stylesheet_directory_uri()."/images/background.jpg";
                            } else {
                                echo get_stylesheet_directory_uri()."/images/background-light.jpg";
                            }?>" alt=""></img>
        </div>
	<div id="main-frame" class="with-margin">
	  <div id="content-wrapper">