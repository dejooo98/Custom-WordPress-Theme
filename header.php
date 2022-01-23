<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Noonis
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('stylesheet_directory'); ?>assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('stylesheet_directory'); ?>assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('stylesheet_directory'); ?>assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('stylesheet_directory'); ?>assets/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php bloginfo('stylesheet_directory'); ?>assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>assets/images/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="<?php bloginfo('stylesheet_directory'); ?>assets/images/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">


    <title>Noonis</title>
	
	<?php wp_head(); ?>

</head>
<body>
<main class="main">
    <!-- HEADER SECTION -->
    <header class="header">
        <div class="container-xl">

            <div class="d-flex align-items-center justify-content-between">
                <!-- HEADER BRAND -->
                <div class="header-brand d-flex justify-content-between">

                    <div class="header-logo">
                        <a href="javascript:;">
                             <?php
                                if (function_exists("the_custom_logo")) {
                                    the_custom_logo();
                                }
                                else {
                                    bloginfo("name");
                                }
                            ?>
                    </a>
                    </div> <!--/.header-logo-->

                    <div class="d-none d-sm-block">
                        <span class="d-block" style="width: 1px; height: 100%; background-color: #DADADA;"></span>
                    </div>

                    <div class="header-phone">
                        <a href="tel:+4937226500" >
                            <span class="d-inline-block mr-1">
                                <svg width="22px" height="22px" viewBox="0 0 22 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                        <g id="Home-Final" transform="translate(-327.000000, -53.000000)" stroke="#0062B8" stroke-width="1.5">
                                            <g id="Calling" transform="translate(165.000000, 40.000000)">
                                                <g transform="translate(163.000000, 14.000000)">
                                                    <path d="M12.7396483,0 C16.5564895,0.432631579 19.5720105,3.50631579 20,7.40210526" id="Stroke-1"></path>
                                                    <path d="M12.7396483,3.72947368 C14.5660805,4.09157895 15.9933997,5.54947368 16.3491982,7.41368421" id="Stroke-3"></path>
                                                    <path d="M9.31420804,10.4972499 C13.42805,14.6951164 14.3613032,9.83865034 16.9806116,12.510328 C19.5058197,15.0871131 20.9582849,15.6033739 17.757769,18.8681301 C17.3570126,19.196865 14.8107703,23.1518517 5.86238909,14.0207014 C-3.08709916,4.88842136 0.785403301,2.28678345 1.10755831,1.87784166 C4.31471658,-1.39595194 4.81289443,0.0940873148 7.33810258,2.67087241 C9.95630393,5.34367975 5.20036609,6.29938347 9.31420804,10.4972499 Z" id="Stroke-5"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                            +49 4921 82028-0
                        </a>
                    </div> <!--/.header-phone-->

                </div> <!--/.header-brand-->
                <!-- END HEADER BRAND -->
                 <!-- HEADER NAV -->
                <div class="header-navigation d-none d-lg-flex align-items-center justify-content-end">
                    <!-- MAIN NAV -->
                    <nav class="header-nav" role="navigation">
                        <ul class="d-flex justify-content-between">
                            <li id="products-nav"><a href="javascript:;">Produkte <span class="d-inline-block ml-1"><svg width="14px" height="9px" viewBox="0 0 14 9" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Home-Final" transform="translate(-792.000000, -60.000000)" stroke="#B9B9B9" stroke-width="2">
                                        <g id="Path-3" transform="translate(165.000000, 40.000000)">
                                            <polyline points="628 21 634 27 640 21"></polyline>
                                        </g>
                                    </g>
                                </g></svg></span></a>
                                <div class="header-products__menu">
                                    <div class="container-xl">
                                        <ul class="d-flex justify-content-between">
                                            <li>
                                                <div class="header-sub__nav">
                                                    <p>Unsere Produkte</p>
                                                    <ul>
                                                        <li><a href="<?php echo get_bloginfo('url').'/products/#solarpanels'; ?>">Solarpanels</a></li>
                                                        <li><a href="<?php echo get_bloginfo('url').'/products/#inverters'; ?>">Inverters</a></li>
                                                        <li><a href="<?php echo get_bloginfo('url').'/products/#storage_tanks'; ?>">Solar storage tanks</a></li>
                                                    </ul>
                                                </div> <!--/.header-sub__nav-->
                                            </li>
                                            <li>
                                                <div class="header-sub__nav">
                                                    <p>Unsere Leistungen</p>
                                                    <ul>
                                                        <li><a href="./noonis./advantages">Vorteile</a></li>
                                                        <li><a href="./noonis./banks;">Finanzierung</a></li>
                                                    </ul>
                                                </div> <!--/.header-sub__nav-->
                                            </li>
                                            <li>
                                                <div class="header-sub__nav">
                                                    <p>Für Unternehmen</p>
                                                    <ul>
                                                       <li><a href="./noonis./referenzen">Referenzen</a></li>
                                                       <li><a href="./noonis./projektanfrage">Projektanfrage</a></li>
                                                    </ul>
                                                </div> <!--/.header-sub__nav-->
                                            </li>
                                            <li>
                                                <?php
                                                    $recent_posts = wp_get_recent_posts(array(
                                                        'numberposts' => 1, // Number of recent posts thumbnails to display
                                                        'post_status' => 'publish' // Show only the published posts
                                                    ));
                                                    foreach( $recent_posts as $post_item ) : ?>
                                                <div class="header-blog">
                                                    <p>Neuigkeiten aus unserem Blog</p>
                                                    <aricle class="header-article">
                                                        <a href="<?php echo get_permalink($post_item['ID']) ?>">
                                                                <?php
                                                                    if (get_the_post_thumbnail($post_item['ID'])):?>
                                                                    <img
                                                                        src="<?php echo get_the_post_thumbnail_url(($post_item['ID'])); ?>"
                                                                        class="img-fluid",
                                                                          style="height:150px; width:100%", 
                                                                    />
                                                                <?php endif; ?>   
                                                        </a>
                                                        <span><?php echo get_the_date(); ?></span>
                                                       <h3><a href="<?php the_permalink($post_item['ID']); ?>"><?php echo $post_item['post_title'] ?></h3>
                                                    </aricle> <!--/.header-article-->
                                                </div> <!--/.header-blog-->
                                                <?php endforeach; ?>
                                            </li>
                                        </ul>
                                    </div> <!--/.container-xl-->
                                </div> <!--/.header-products__menu-->
                            </li>
                               
                                     <?php
                                        wp_nav_menu( array(
                                            'theme_location' 	=> 'primary-menu',
                                            'container'			=>  false,
                                            'container_class'	=>  false,
                                            'menu_class'		=>  false,
                                            'items_wrap'        => '%3$s',
                                            'depth'             => 0
                                        ),
                                        '<a>'
                                    );
                                    ?>    
                              
                        </ul>
                    </nav> <!--/.header-nav-->
                    <!-- END MAIN NAV -->
                    <!-- CALL TO ACTION -->
                    <div class="header-action">
                        <a href="<?php echo get_bloginfo('url').'/configurator'; ?>" class="btn btn-outline-primary">Los geht's</a>
                    </div> <!--/.header-action-->
                    <!-- END CALL TO ACTION -->
                </div> <!--/.header-navigation-->
                <!-- END HEADER NAV-->
                <!-- MOBILE NAV HANDLER -->
                <div class="header-mobile d-lg-none">
                    <a href="javascript:;"
                       class="header-mobile__btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a> <!--/.header-mobile__btn-->
                </div> <!--/.header-mobile-->
                <!-- END MOBILE NAV HANDLER -->
            </div> <!--/.d-flex-->

        </div> <!--/.container-xl-->
    </header> <!--/.header-->
    <!-- END HEADER SECTION -->
    <!-- MOBILE NAVIGATION -->
    <div class="mobile-navigation d-lg-none">
        <div class="mobile-navigation__container">
            <ul id="mob-nav">
                <li><a href="javascript:;" class="products-button">Produkte <span class="d-inline-block ml-1"><svg width="14px" height="9px" viewBox="0 0 14 9" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Home-Final" transform="translate(-792.000000, -60.000000)" stroke="#B9B9B9" stroke-width="2">
                                        <g id="Path-3" transform="translate(165.000000, 40.000000)">
                                            <polyline points="628 21 634 27 640 21"></polyline>
                                        </g>
                                    </g>
                                </g></svg></span></a>
                    <div class="products-menu">
                        <div class="products-menu__measuring">
                            <ul>
                                <li>
                                    <div class="products-sub__menu">
                                        <p>Unsere Produkte</p>
                                        <ul>
                                           <li><a href="<?php echo get_bloginfo('url').'/products/#solarpanels'; ?>">Solarpanels</a></li>
                                           <li><a href="<?php echo get_bloginfo('url').'/products/#inverters'; ?>">Inverters</a></li>
                                           <li><a href="<?php echo get_bloginfo('url').'/products/#storage_tanks'; ?>">Solar storage tanks</a></li>
                                        </ul>
                                    </div> <!--/.products-sub__menu-->
                                </li>
                                <li>
                                    <div class="products-sub__menu">
                                        <p>Unsere Leistungen</p>
                                               <ul>
                                                    <li><a href="./noonis./advantages">Vorteile</a></li>
                                                    <li><a href="./noonis./banks">Finanzierung</a></li>
                                               </ul>
                                    </div> <!--/.products-sub__menu-->
                                </li>
                                <li>
                                    <div class="products-sub__menu">
                                        <p>Für Unternehmen</p>
                                        <ul>
                                            <li><a href="./noonis./referenzen">Referenzen</a></li>
                                            <li><a href="./noonis./projektanfrage">Projektanfrage</a></li>
                                        </ul>
                                    </div> <!--/.products-sub__menu-->
                                </li>
                            </ul>
                        </div> <!--/.products-menu__measuring-->
                    </div> <!--/.products-menu-->
                </li>
               
                <?php
                        wp_nav_menu( array(
                                'theme_location' 	=> 'primary-menu',
                                'container'			=>  false,
                                'container_class'	=>  false,
                                'menu_class'		=>  false,
                                'items_wrap'        => '%3$s',
                                'depth'             => 0
                            ),
                            '<a>'
                        );
                ?>    
               
            </ul>
        </div> <!--/.mobile-navigation__container-->
    </div> <!--/.mobile-navigation-->
    <!-- END MOBILE NAVIGATION -->