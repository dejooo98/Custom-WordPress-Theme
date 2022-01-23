<?php
/*
    Template Name: Home Page
*/


//Advanced Custom fields
$header_title                     =  get_field('header_title');
$header_description               =  get_field('header_description');

$advantage_1_image                =  get_field('advantage_1_image');
$advantage_1_title                =  get_field('advantage_1_title');
$advantage_1_description          =  get_field('advantage_1_description');

$advantage_2_image                =  get_field('advantage_2_image');
$advantage_2_title                =  get_field('advantage_2_title');
$advantage_2_description          =  get_field('advantage_2_description');

$advantage_3_image                =  get_field('advantage_3_image');
$advantage_3_title                =  get_field('advantage_3_title');
$advantage_3_description          =  get_field('advantage_3_description');

$cost_of_photovoltaic_system      =  get_field('cost_of_photovoltaic_system');

$slider_element_1_number          =  get_field('slider_element_1_number');
$slider_element_1_text            =  get_field('slider_element_1_text');
$slider_element_1_price           =  get_field('slider_element_1_price');

$slider_element_2_number          =  get_field('slider_element_2_number');
$slider_element_2_text            =  get_field('slider_element_2_text');
$slider_element_2_price           =  get_field('slider_element_2_price');

$slider_element_3_number          =  get_field('slider_element_3_number');
$slider_element_3_text            =  get_field('slider_element_3_text');
$slider_element_3_price           =  get_field('slider_element_3_price');

$slider_element_4_number          =  get_field('slider_element_4_number');
$slider_element_4_text            =  get_field('slider_element_4_text');
$slider_element_4_price           =  get_field('slider_element_4_price');

$quality_title                    =  get_field('quality_title');
$quality_paragraph                =  get_field('quality_paragraph');
$quality_subparagraph_1           =  get_field('quality_subparagraph_1');
$quality_subtitle_1               =  get_field('quality_subtitle_1');
$quality_subparagraph_2           =  get_field('quality_subparagraph_2');
$quality_subtitle_2               =  get_field('quality_subtitle_2');
$quality_image                    =  get_field('quality_image');




get_header(); ?>


<!-- CONTENT -->
    <section class="content home">
        <!-- HERO -->
        <section class="hero">
            <div class="hero-container">
                <div class="d-md-flex align-items-md-center">
                    <!-- HERO CONTENT -->
                    <div class="hero-content">
                        <article class="hero-article">
                             <h1><?php echo $header_title; ?></h1>
                            <p><?php echo $header_description ?></p>
                            <a href="<?php echo get_bloginfo('url').'/configurator'; ?>" class="btn btn-primary">Los geht's</a>
                            <div class="d-none d-md-block hero-article__deco">
                                <span>
                        <svg width="27px" height="49px" viewBox="0 0 27 49" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity="0.168480283">
                                <g id="Home-Final" transform="translate(-165.000000, -724.000000)" fill="#388AF7">
                                    <g id="Group-2-Copy-2" transform="translate(178.500000, 748.500000) rotate(90.000000) translate(-178.500000, -748.500000) translate(154.000000, 735.000000)">
                                        <circle id="Oval" cx="2.5" cy="2.5" r="2.5"></circle>
                                        <circle id="Oval" cx="13.5" cy="2.5" r="2.5"></circle>
                                        <circle id="Oval" cx="24.5" cy="2.5" r="2.5"></circle>
                                        <circle id="Oval" cx="35.5" cy="2.5" r="2.5"></circle>
                                        <circle id="Oval" cx="2.5" cy="13.5" r="2.5"></circle>
                                        <circle id="Oval" cx="13.5" cy="13.5" r="2.5"></circle>
                                        <circle id="Oval" cx="24.5" cy="13.5" r="2.5"></circle>
                                        <circle id="Oval" cx="35.5" cy="13.5" r="2.5"></circle>
                                        <circle id="Oval" cx="2.5" cy="24.5" r="2.5"></circle>
                                        <circle id="Oval" cx="13.5" cy="24.5" r="2.5"></circle>
                                        <circle id="Oval" cx="24.5" cy="24.5" r="2.5"></circle>
                                        <circle id="Oval" cx="35.5" cy="24.5" r="2.5"></circle>
                                        <circle id="Oval" cx="46.5" cy="2.5" r="2.5"></circle>
                                        <circle id="Oval" cx="46.5" cy="13.5" r="2.5"></circle>
                                        <circle id="Oval" cx="46.5" cy="24.5" r="2.5"></circle>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </span>
                            </div> <!--/.hero-deco__article-->
                        </article> <!--/.hero-article-->
                    </div> <!--/.hero-content-->
                    <!-- END HERO CONTENT-->
                    <!-- HERO IMAGE -->
                    <div class="hero-image">
                        <!-- IF HEADER IMAGE EXISTS -->
                        <?php
                            if (has_post_thumbnail()):?>
                               <img
                                  src="<?php echo get_the_post_thumbnail_url(); ?>"
                                  class="img-fluid" 
                               />
                            <?php endif; ?>

                    <div class="d-none d-md-block hero-image__deco">
                            <span>
                        <svg width="84px" height="65px" viewBox="0 0 84 65" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity="0.110560826">
                                <g id="Home-Final" transform="translate(-1261.000000, -766.000000)" fill="#41485A">
                                    <g id="Group-2" transform="translate(1261.000000, 766.000000)">
                                        <circle id="Oval" cx="4.5" cy="4.5" r="4.5"></circle>
                                        <circle id="Oval" cx="23.5" cy="4.5" r="4.5"></circle>
                                        <circle id="Oval" cx="41.5" cy="4.5" r="4.5"></circle>
                                        <circle id="Oval" cx="60.5" cy="4.5" r="4.5"></circle>
                                        <circle id="Oval" cx="4.5" cy="23.5" r="4.5"></circle>
                                        <circle id="Oval" cx="23.5" cy="23.5" r="4.5"></circle>
                                        <circle id="Oval" cx="41.5" cy="23.5" r="4.5"></circle>
                                        <circle id="Oval" cx="60.5" cy="23.5" r="4.5"></circle>
                                        <circle id="Oval" cx="4.5" cy="41.5" r="4.5"></circle>
                                        <circle id="Oval" cx="23.5" cy="41.5" r="4.5"></circle>
                                        <circle id="Oval" cx="41.5" cy="41.5" r="4.5"></circle>
                                        <circle id="Oval" cx="60.5" cy="41.5" r="4.5"></circle>
                                        <circle id="Oval" cx="4.5" cy="60.5" r="4.5"></circle>
                                        <circle id="Oval" cx="23.5" cy="60.5" r="4.5"></circle>
                                        <circle id="Oval" cx="41.5" cy="60.5" r="4.5"></circle>
                                        <circle id="Oval" cx="60.5" cy="60.5" r="4.5"></circle>
                                        <circle id="Oval" cx="79.5" cy="4.5" r="4.5"></circle>
                                        <circle id="Oval" cx="79.5" cy="23.5" r="4.5"></circle>
                                        <circle id="Oval" cx="79.5" cy="41.5" r="4.5"></circle>
                                        <circle id="Oval" cx="79.5" cy="60.5" r="4.5"></circle>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </span>
                        </div> <!--/.hero-deco__image-->
                    </div> <!--/.hero-image-->
                    <!-- END HERO IMAGE -->
                </div> <!--/.d-md-flex align-items-md-center-->


            </div> <!--/.hero-container-->
        </section> <!--/.hero-->
        <!-- END HERO -->
        <!-- BENEFITS -->
        <section class="benefits">
            <div class="container-xl">
                <header class="benefits-header">
                    <h2>Warum sich eine Photovoltaikanlage lohnt.</h2>
                     <p>Mit Solarstrom ändert sich nichts und alles gleichzeitig.</p>
                </header> <!--/.benefits-header-->

                <div class="benefits-image">
                    <img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home/benefits.svg" alt="Benefits image">
                </div> <!--/.benefits-image-->

                <div class="benefits-articles">

                    <div class="d-none d-md-block">
                        <div class="row pb-3 align-items-end">
                            <div class="col-md-4">
                                <?php if(!empty($advantage_1_image) ) : ?>
                                <img src="<?php echo $advantage_1_image['url']; ?>" alt="<?php echo $advantage_1_image['alt']; ?>">
                                <?php endif; ?>
                            </div>
                            <div class="col-md-4">
                                <?php if(!empty($advantage_2_image) ) : ?>
                                <img src="<?php echo $advantage_2_image['url']; ?>" alt="<?php echo $advantage_2_image['alt']; ?>">
                                <?php endif; ?>
                            </div>
                            <div class="col-md-4">
                                <?php if(!empty($advantage_3_image) ) : ?>
                                <img src="<?php echo $advantage_3_image['url']; ?>" alt="<?php echo $advantage_3_image['alt']; ?>">
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="row pb-2">
                            <div class="col-md-4">
                                <h3><?php echo $advantage_1_title; ?></h3>
                            </div>
                            <div class="col-md-4">
                                <h3><?php echo $advantage_2_title; ?></h3>
                            </div>
                            <div class="col-md-4">
                                <h3><?php echo $advantage_3_title; ?></h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 pr-lg-2 pr-xl-3">
                                <p><?php echo $advantage_1_description; ?></p>
                            </div>
                            <div class="col-md-4 pr-lg-2 pr-xl-3">
                                <p><?php echo $advantage_2_description; ?></p>
                            </div>
                            <div class="col-md-4 pr-lg-2 pr-xl-3">
                                <p><?php echo $advantage_3_description; ?></p>
                            </div>
                        </div>
                    </div> <!--/.d-none d-md-block-->


                    <!-- BENEFITS ARTICLES MOBILE -->
                    <div class="d-md-none">

                        <div class="pb-3">
                            <article class="benefits-article text-center">
                                  <?php if(!empty($advantage_1_image) ) : ?>
                                    <img src="<?php echo $advantage_1_image['url']; ?>" class="d-inline-block mb-3" alt="<?php echo $advantage_1_image['alt']; ?>">
                                  <?php endif; ?>
                                <h3 class="mb-2"> <h3><?php echo $advantage_1_title; ?></h3></h3>
                                <p><?php echo $advantage_1_description; ?></p>
                            </article> <!--/.benefits-article-->
                        </div> <!--/.pb-3-->

                        <div class="pb-3">
                            <article class="benefits-article text-center">
                                  <?php if(!empty($advantage_2_image) ) : ?>
                                    <img src="<?php echo $advantage_2_image['url']; ?>" class="d-inline-block mb-3" alt="<?php echo $advantage_2_image['alt']; ?>">
                                  <?php endif; ?>                                <h3 class="mb-2"> <h3><?php echo $advantage_2_title; ?></h3></h3>
                                 <p><?php echo $advantage_2_description; ?></p>
                            </article> <!--/.benefits-article-->
                        </div> <!--/.pb-3-->

                        <div>
                            <article class="benefits-article text-center">
                                  <?php if(!empty($advantage_3_image) ) : ?>
                                    <img src="<?php echo $advantage_3_image['url']; ?>" class="d-inline-block mb-3" alt="<?php echo $advantage_3_image['alt']; ?>">
                                  <?php endif; ?>                                <h3 class="mb-2"> <h3><?php echo $advantage_3_title; ?></h3></h3>
                                 <p><?php echo $advantage_3_description; ?></p>
                            </article> <!--/.benefits-article-->
                        </div> <!--/.pb-3-->

                    </div> <!--/.d-md-none-->
                    <!-- END BENEFITS ARTICLES MOBILE -->

                </div> <!--/.benefits-articles-->

            </div> <!--/.container-xl-->
        </section> <!--/.benefits-->
        <!-- END BENEFITS -->
        <!-- COSTS -->
        <section class="costs">
            <?php the_field('cost_of_ photovoltaic_system'); ?>

            <div class="costs-installation">
                    <header class="costs-header" >
                        <h3>Kosten für die Installation von Solarmodulen</h3>
                    </header>

                    <div class="costs-slider__wrap">
                        <div id="costs-slider" class="costs-slider"></div> <!--/.costs-slider-->
                    </div> <!--/.cost-slider__wrap-->
                </div> <!--/.costs-installation-->

                <div class="costs-slider__elements d-none">
                    <div class="costs-slider__start">4</div> <!--/.costs-slider__start-->
                    <!-- SLIDER EL -->
                    <div class="costs-slider__element">
                        <span><?php echo $slider_element_1_number; ?></span>
                        <span><?php echo $slider_element_1_text; ?></span>
                        <span><?php echo $slider_element_1_price; ?></span>
                    </div><!--/.costs-slider__element-->
                    <!-- END SLIDER EL -->
                    <!-- SLIDER EL -->
                    <div class="costs-slider__element">
                        <span><?php echo $slider_element_2_number; ?></span>
                        <span><?php echo $slider_element_2_text; ?></span>
                        <span><?php echo $slider_element_2_price; ?></span>
                    </div><!--/.costs-slider__element-->
                    <!-- END SLIDER EL -->
                    <!-- SLIDER EL -->
                    <div class="costs-slider__element">
                        <span><?php echo $slider_element_3_number; ?></span>
                        <span><?php echo $slider_element_3_text; ?></span>
                        <span><?php echo $slider_element_3_price; ?></span>
                    </div><!--/.costs-slider__element-->
                    <!-- END SLIDER EL -->
                    <!-- SLIDER EL -->
                    <div class="costs-slider__element">
                        <span><?php echo $slider_element_4_number; ?></span>
                        <span><?php echo $slider_element_4_text; ?></span>
                        <span><?php echo $slider_element_4_price; ?></span>
                    </div><!--/.costs-slider__element-->
                    <!-- SLIDER EL -->
                </div> <!--/.costs-slider__elements-->
            </div><!--/.container-xl-->
        </section> <!--/.costs-->
        
        <!-- END COSTS -->
        <!-- QUALITY -->
        <section class="quality">
            <div class="container-xl">

                <div class="d-md-flex align-items-center">
                    <div class="quality-content">
                        <article class="quality-article">
                            <h2><?php echo $quality_title; ?></h2>
                            <p><?php echo $quality_paragraph; ?></p>
                        </article> <!--/.quality-article-->

                        <div class="quality-details">
                            <div class="row">
                                <div class="col-6">
                                    <p><?php echo $quality_subparagraph_1; ?></p>
                                    <h3><?php echo $quality_subtitle_1; ?></h3>
                                </div>
                                <div class="col-6">
                                   <p><?php echo $quality_subparagraph_2; ?></p>
                                   <h3><?php echo $quality_subtitle_2; ?></h3>
                                </div>
                            </div>
                        </div> <!--/.quality-details-->
                    </div> <!--/.quality-content-->

                    <div class="quality-image">
                                <?php if(!empty($quality_image) ) : ?>
                                <img src="<?php echo $quality_image['url']; ?>" class="img-fluid" alt="<?php echo $quality_image['alt']; ?>">
                                <?php endif; ?>                    
                    </div> <!--/.quality-image-->
                </div> <!--/.d-flex-->

            </div> <!--/.container-xl-->
        </section> <!--/.quality-->
        <!-- END QUALITY -->
        <!-- NEWS -->
        <section class="news">
            <div class="container-xl">
                <header class="news-header">
                    <h2>Neueste Nachrichten und Einblicke von uns</h2>
                </header> <!--/.news-header-->
                <div class="news-content">
                    <div class="row">
                        
                    <?php
                    $recent_posts = wp_get_recent_posts(array(
                        'numberposts' => 3, // Number of recent posts thumbnails to display
                        'post_status' => 'publish' // Show only the published posts
                    ));
                    foreach( $recent_posts as $post_item ) : ?>
                        <div class="col-md-4">         
                            <article class="news-article">
                                <a class="news-image"
                                   href="<?php echo get_permalink($post_item['ID']) ?>">
                                        <?php
                                            if (get_the_post_thumbnail($post_item['ID'])):?>
                                            <img
                                                src="<?php echo get_the_post_thumbnail_url(($post_item['ID']),'blog-thumb-size'); ?>"
                                                class="img-fluid" 
                                            />
                                        <?php endif; ?>                                 
                                    </a> <!--/.news-image-->
                                <p class="news-date"><?php echo get_the_time('d-m-Y', $post_item['ID']);?></p>
                                <h3><a href="<?php the_permalink($post_item['ID']); ?>"><?php echo $post_item['post_title'] ?></h3>
                                <a class="news-link" href="<?php the_permalink($post_item['ID']); ?>">WEITERLESEN
                                    <span>
                                        <svg width="8px" height="13px" viewBox="0 0 8 13" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="Home-Final" transform="translate(-265.000000, -4932.000000)" stroke="#017DCF" stroke-width="2">
                                                    <g id="BLOG" transform="translate(165.000000, 4343.000000)">
                                                        <g id="Group-4" transform="translate(0.000000, 135.000000)">
                                                            <g id="Group-5" transform="translate(0.000000, 275.000000)">
                                                                <g id="Group-19" transform="translate(0.000000, 170.000000)">
                                                                    <polyline id="Rectangle-12" transform="translate(101.500000, 15.500000) scale(1, -1) rotate(135.000000) translate(-101.500000, -15.500000) " points="98 19 98 12 105 12"></polyline>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                            </article> 

                        </div> <!--/.col-md-4-->
                    <?php endforeach; ?>

                    </div> <!--/.row-->
                </div> <!--/.news-content-->
            </div> <!--/.container-xl-->
        </section> <!--/.news-->
        <!-- END NEWS -->
        <!-- ROOF -->
        <section class="roof">
            <div class="container-xl">
                <header class="roof-header">
                  <h2>Bereit, loszulegen?</h2>
                  <p>Möchten Sie das perfekte Paket für Ihre ganz persönlichen Bedürfnisse finden?</p>
                </header> <!--/.roof-header-->

                <div class="roof-select">
                    <p> Wählen Sie die Dachform Ihres Hauses </p>
                    <div class="roof-options">
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <a href="javascript:;" class="roof-option" data-roof="gable_roof">
                                    <img class="img-fluid mb-3 mt-1" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home/gable-roof.svg" alt="Gable Roof">
                                  <p>Satteldach</p>
                                    <span class="roof-check">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home/select-roof.svg" alt="Select Roof">
                                    </span> <!--/.roof-check-->
                                </a> <!--/.roof-option-->
                            </div> <!--/.col-md-3-->
                            <div class="col-sm-6 col-md-3">
                                <a href="javascript:;" class="roof-option active" data-roof="flat_roof">
                                    <img class="img-fluid mb-3 mt-1" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home/flat-roof.svg" alt="Flat Roof">
                                   <p>Flachdach</p>
                                    <span class="roof-check">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home/select-roof.svg" alt="Select Roof">
                                    </span> <!--/.roof-check-->
                                </a> <!--/.roof-option-->
                            </div> <!--/.col-md-3-->
                            <div class="col-sm-6 col-md-3">
                                <a href="javascript:;" class="roof-option" data-roof="shed_roof">
                                    <img class="img-fluid mb-3 mt-1" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home/shed-roof.svg" alt="Shed Roof">
                                   <p>Schuppendach</p>
                                    <span class="roof-check">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home/select-roof.svg" alt="Select Roof">
                                    </span> <!--/.roof-check-->
                                </a> <!--/.roof-option-->
                            </div> <!--/.col-md-3-->
                            <div class="col-sm-6 col-md-3">
                                <a href="javascript:;" class="roof-option" data-roof="other_roof">
                                    <img class="img-fluid  mt-5" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home/other-roof.svg" alt="Other Roof">
                                    <p>Andere</p>
                                    <span class="roof-check">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home/select-roof.svg" alt="Select Roof">
                                    </span> <!--/.roof-check-->
                                </a> <!--/.roof-option-->
                            </div> <!--/.col-md-3-->
                        </div>
                    </div> <!--/.roof-options-->

                    <div class="roof-action">
                        <a href="<?php echo get_bloginfo('url').'/configurator'; ?>" class="btn btn-primary roof-config">LOS GEHT'S</a>
                    </div> <!--/.roof-action-->
                </div> <!--/.roof-select-->
            </div> <!--/.container-xl-->
        </section> <!--/.roof-->
        <!-- END ROOF -->
    </section> <!--/.content-->
    <!-- END CONTENT -->


<?php get_footer(); ?>
