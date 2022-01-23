<?php
/*
    Template Name: Products Page
*/

//Advanced Custom fields
$our_solarpanels                     =  get_field('our_solarpanels');
$our_inverters                       =  get_field('our_inverters');
$our_solar_storage_tanks             =  get_field('our_solar_storage_tanks');


get_header(); ?>


 <!-- CONTENT -->
        <section class="content products">

            <div class="container-xl">
                <!-- PRODUCTS CONTENT -->
                <div class="products-content">
                    
                    <?php echo $our_solarpanels; ?>

                    <?php echo $our_inverters; ?>

                    <?php echo $our_solar_storage_tanks; ?>
                   
                </div> <!--/.products-content-->
                <!-- END PRODUCTS CONTENT -->
            </div> <!--/.container-xl-->

        </section> <!--/.content-->
        <!-- END CONTENT -->

<?php get_footer(); ?>