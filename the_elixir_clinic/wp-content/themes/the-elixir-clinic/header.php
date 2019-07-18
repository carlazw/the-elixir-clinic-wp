<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Elixir_Clinic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="<?php echo get_template_directory_uri()?>/dist/app.b29f1af083c9e2ca8aa5.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>
    

<body <?php body_class(); ?>>
<div id="page" class="site">

<header>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="language-switcher">
                        <ul>
                            <li> en</li>
                            <li> <a href="#">ar</a></li>
                        </ul>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/theelixirclinic" target="_blank"> <i class="fa fa-facebook-f"></i> </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/theelixirclinic/?hl=en" target="_blank"> <i class="fa fa-instagram"></i> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="logo-container">
                            <a href="#">
                                <img  class="img-fluid"  class="img-fluid" src="<?php echo get_template_directory_uri()?>/dist/img/logo.png" alt="logo" title="logo">
                            </a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse menu-search" id="navbarSupportedContent">
                            <div class="menu">
                                <ul class="navbar-nav mr-auto" id="header-menu">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Treatments</a></li>
                                    <li><a href="#">Locations</a></li>
                                    <li><a href="#">Elixir Blog</a></li>
                                    <li><a href="#">Franchise</a></li>
                                    <li><a href="#">Book Now</a></li>
                                </ul>
                            </div>
                            <div class="search-icon">
                                <a href="#"> <i class="fa fa-search"></i> </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

	<div id="content" class="site-content">
