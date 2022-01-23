<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Noonis
 */

get_header();
?>
    <section class="content blogs">

    <div class="container-xl">

    <header class="blogs-header">
        <div class="blogs-header__content">
            <h2>Neueste Neuigkeiten und Ideen von unserem Team</h2>
            <p>Hier finden Sie die neuesten Nachrichten und Erkenntnisse zu Noonis – neue Produkte, ausführliche
                Interviews und erfolgreich abgeschlossene Projekte</p>
        </div> <!--/.blogs-header__content-->
        <div class="d-none d-md-block blog-header__deco1"><img
                    src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home/hero-deco1.svg"
                    alt="Header decoration"></div> <!--/.blog-header__deco1-->
        <div class="d-none d-md-block blog-header__deco2"><img
                    src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home/hero-deco2.svg"
                    alt="Header decoration"></div> <!--/.blog-header__deco2-->
    </header> <!--/.blogs-header-->

    <div class="blogs-content d-flex flex-column flex-sm-row">
        <section class="blogs-section order-2 order-sm-1">
            <div class="row">
                <?php
                if (have_posts()) :

                    if (is_home() && !is_front_page()) :
                        ?>
                        <header>
                            <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>

                        </header>
                    <?php
                    endif;

                    $i = 1;

                    /* Start the Loop */
                    while (have_posts()) :
                        $args = ['isFirst' => $i === 1];
                        the_post();
                        // the_post_thumbnail();
                        /*
                        * Include the Post-Type-specific template for the content.
                        * If you want to override this in a child theme, then include a file
                        * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                        */
                        //get_template_part( 'template-parts/content', get_post_type() );
                        get_template_part('template-parts/content-blogs', get_post_type(), $args);

                        $i++;
                    endwhile;

                else :

                    get_template_part('template-parts/content', 'none');

                endif;
                ?>
            </div>

            <?php if (have_posts()) : ?>
                <div class="row">
                    <?php bootstrap_pagination(); ?>
                </div>
            <?php endif; ?>
        </section>

        <!-- Sidebar -->
        <aside class="blogs-sidebar order-1 order-sm-2">
            <?php get_sidebar(); ?>
        </aside>
    </div>
<?php
get_footer();
