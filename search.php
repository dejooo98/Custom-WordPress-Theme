<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Noonis
 */

get_header();
?>
    <div class="container-xl">
        <?php if (have_posts()) : ?>

        <header class="blogs-header">
            <div class="blogs-header__content">
                <h2 class="page-title">
                    <?php
                    /* translators: %s: search query. */
                    printf(esc_html__('Search Results for: %s', 'noonis-gmbh'), '<span>' . get_search_query() . '</span>');
                    ?>
                </h2>
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
                    /* Start the Loop */

                    while (have_posts()) :
                        the_post();

                        /*
                         * Include the Post-Type-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                         */
                        get_template_part('template-parts/content-blogs', get_post_type());

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
            <aside class="blogs-sidebar order-1 order-sm-2">
                <?php get_sidebar(); ?>
            </aside>
        </div>
    </div><!-- #main -->

<?php
//get_sidebar();
get_footer();
