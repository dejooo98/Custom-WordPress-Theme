<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Noonis
 */

?>

   <!-- FOOTER -->
    <footer class="footer">
        <div class="container-xl">

            <div class="footer-content">

                <div class="d-md-flex justify-content-md-between text-center text-md-left">
                    <!-- FOOTER DETAILS -->
                    <article class="footer-details">
                        <a href="index.html">
                             <?php
                                if (function_exists("the_custom_logo")) {
                                    the_custom_logo();
                                }
                                else {
                                    bloginfo("name");
                                }
                                ?>
                        </a>
                        <p>Fangen Sie die Kraft der Sonne ein und produzieren Sie Ihre eigene Energie.</p>
                    </article> <!--/.footer-details-->
                    <!-- END FOOTER DETAILS -->
                    <!-- FOOTER LINKS -->
                    <article class="footer-links">
                        <h3>Links</h3>
                        <?php
                            wp_nav_menu( array(
                                'theme_location' 	=> 'footer-menu',
                                'container'			=> 'ul'
                                //'menu_class'		=> 'list-unstyled list-inline'
                            ));
                        ?>
                    </article> <!--/.footer-links-->
                    <!-- END FOOTER LINKS -->
                    <!-- GET STARTED -->
                    <article class="footer-start">
                        <h3>Loslegen</h3>
                        <ul>
                            <li><a href="<?php echo get_bloginfo('url').'/products/#solarpanels'; ?>">Solarpanels</a></li>
                            <li><a href="<?php echo get_bloginfo('url').'/products/#inverters'; ?>">Inverters</a></li>
                            <li><a href="<?php echo get_bloginfo('url').'/products/#storage_tanks'; ?>">Solar storage tanks</a></li>
                        </ul>
                    </article> <!--/.footer-start-->
                    <!-- END GET STARTED -->
                    <!-- FOOTER SOCIAL -->
                    <article class="footer-social">
                        <h3>IN KONTAKT KOMMEN</h3>
                        <ul class="list-unstyled d-flex justify-content-center justify-content-md-start">
                            <li><a target="_blank" href="https://www.instagram.com/noonis_de/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/instagram-icon.svg" alt="Instagram"></a></li>
                            <li><a target="_blank" href="https://www.facebook.com/noonisde"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/facebook-icon.svg" alt="Facebook"></a></li>
                            <li><a target="_blank" href="https://twitter.com/Noonisde"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/twitter-icon.svg" alt="Twitter"></a></li>
                        </ul>
                    </article> <!--/.footer-social-->
                    <!-- END FOOTER SOCIAL -->
                </div> <!--/.d-flex-->

            </div> <!--/.footer-content-->

            <div class="footer-copy">
                <div class="d-flex flex-column flex-md-row justify-content-md-between">
                    <div class="copyright text-center text-md-left order-2 order-md-1">
                        <p>Copyright &copy; 2021 <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></p>
                    </div> <!--/.copyright-->

                    <div class="terms order-1 order-md-2">
                        <ul class="d-flex justify-content-center justify-content-md-start list-unstyled">
                            <li><a href="<?php echo get_bloginfo('url').'/impressum'; ?>">Impressum</a></li>
                            <li><a href="<?php echo get_bloginfo('url').'/datenschutzerklarung'; ?>">Datenschutzerklärung</a></li>
                            <li><a href="<?php echo get_bloginfo('url').'/agb'; ?>">AGB</a></li>
                        </ul>
                    </div> <!--/.terms-->
                </div> <!--/.d-flex justify-content-between-->
            </div> <!--/.footer-copy-->

        </div> <!--/.container-xl-->
    </footer> <!--/.footer-->
    <!-- END FOOTER -->
    <?php wp_footer(); ?>
            <script src="<?php bloginfo('template_directory'); ?>/assets/js/app.js"></script>
</main>
</body>
</html>




</body>
</html>
