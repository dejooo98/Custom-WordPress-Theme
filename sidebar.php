<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Noonis
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

 <aside class="blogs-sidebar order-1 order-sm-2">
            <div class="blogs-category">

                <div class="blogs-search">
                    <h3>Suche</h3>
                    <!-- <div class="blogs-search__input">
                        <input type="text" placeholder="Suche">
                    </div> /.blogs-search__input -->
                    <form id="searchform" method="get" action="<?php bloginfo('url'); ?>">
                        <input type="text" name="s" id="s" size="15"  placeholder="Suche" />                        
                    </form>
                </div> <!--/.blogs-search-->

                <div class="blogs-categories">
                    <h3>Kategorien</h3>
                    <ul>
                        <li>
                            <?php
                            // get template_part tag
                            get_template_part("./template-parts/categories","content")
                            ?>
                        </li>
                    </ul>
                </div> <!--/.blogs-categories-->

                <div class="blogs-social">
                    <h3>Folge uns</h3>
                    <ul class="d-flex">
                        <li><a target="_blank" href="https://www.instagram.com/noonis_de/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/blogs/instagram-blogs.svg" alt="Instagram Icon"></a></li>
                        <li><a target="_blank" href="https://www.facebook.com/noonisde"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/blogs/facebook-blogs.svg" alt="Facebook Icon"></a></li>
                        <li><a target="_blank" href="https://twitter.com/Noonisde"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/blogs/twitter-blogs.svg" alt="Twitter Icon"></a></li>
                    </ul>
                </div> <!--/.blogs-social-->

            </div> <!--/.blogs-category-->
    
            <div class="blogs-newsletter">
                <h3>Newsletter</h3>
                    <p>Abonnieren Sie unseren Newsletter und bleiben Sie mit den neuesten Nachrichten in Kontakt.</p>                            
                    <?php
                        if( function_exists( 'mc4wp_show_form' ) ) {
                        mc4wp_show_form();
                        }

                        //define('MC4WP_API_KEY', 'your-api-key-here');
                    ?>
            </div> <!--/.blogs-newsletter-->

        </aside> <!--/.blogs-sidebar-->
