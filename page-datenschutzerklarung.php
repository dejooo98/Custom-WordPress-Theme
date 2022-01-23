<?php
/*
    Template Name: Datenschutzerklarung Page
*/

get_header(); ?>


<section class="content impressum">

            <div class="container-xl">
                <article class="impressum-article">
                    <!-- IMPRESSUM HEADER -->
                    <header class="impressum-header">
                        <h1><?php echo the_title(); ?></h1>
                    </header> <!--/.impressum-header-->
                    <!-- END IMPRESSUM HEADER -->
                    <div class="impressum-content">
                         <?php echo get_the_content(); ?>
                    </div> <!--/.impressum-content-->
                </article> <!--/.impressum-article-->

            </div> <!--/.container-xl-->

        </section> <!--/.content-->



<?php get_footer(); ?>