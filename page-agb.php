<?php
/*
    Template Name: AGB Page
*/
?>

<?php get_header(); 

$agb_content      =   get_field('agb_content');

?>

    <!-- CONTENT -->
        <section class="content impressum">

            <div class="container-xl">
                <article class="impressum-article">
                    <!-- IMPRESSUM HEADER -->
                    <header class="impressum-header">
                        <h1><?php echo the_title(); ?></h1>
                    </header> <!--/.impressum-header-->
                    <!-- END IMPRESSUM HEADER -->
                    <div class="impressum-content">
                         <?php echo $agb_content; ?>
                    </div> <!--/.impressum-content-->
                </article> <!--/.impressum-article-->

            </div> <!--/.container-xl-->

        </section> <!--/.content-->
        <!-- END CONTENT -->

<?php get_footer();?>