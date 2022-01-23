<?php
/*
    Template Name: About Us Page
*/


//Advanced Custom Fields

$about_title                     = get_field('about_title');

$service_1_title                 = get_field('service_1_title');
$service_1_desc                  = get_field('service_1_desc');

$service_2_title                 = get_field('service_2_title');
$service_2_desc                  = get_field('service_2_desc');

$service_3_title                 = get_field('service_3_title');
$service_3_desc                  = get_field('service_3_desc');

$service_4_title                 = get_field('service_4_title');
$service_4_desc                  = get_field('service_4_desc');

$our_story_title                  = get_field('our_story_title');
$our_story_text                  = get_field('our_story_text');

$journey_icon                    = get_field('journey_icon');
$journey_year                    = get_field('journey_year');
$journey_desc                    = get_field('journey_desc');

$journey_icon2                    = get_field('journey_icon2');
$journey_year2                    = get_field('journey_year2');
$journey_desc2                    = get_field('journey_desc2');

$journey_icon3                    = get_field('journey_icon3');
$journey_year3                    = get_field('journey_year3');
$journey_desc3                    = get_field('journey_desc3');

$journey_icon4                    = get_field('journey_icon4');
$journey_year4                    = get_field('journey_year4');
$journey_desc4                    = get_field('journey_desc4');


$slider_image1                    = get_field('slider_image1');
$slider_image2                    = get_field('slider_image2');
$slider_image3                    = get_field('slider_image3');
$slider_image4                    = get_field('slider_image4');
$slider_image5                    = get_field('slider_image5');
$slider_image6                    = get_field('slider_image6');



?>

<?php get_header(); ?>

<section class="content about-us">

            <section class="about">
                <div class="container-xl">

                    <header class="about-header">
                        <h2><?php echo $about_title; ?></h2>
                    </header> <!--/.about-header-->

                    <article class="about-article">
                        <div class="about-image">
                           <!-- IF HEADER IMAGE EXISTS -->
                            <?php
                            if (has_post_thumbnail()):?>
                            <img
                                src="<?php echo get_the_post_thumbnail_url(); ?>"
                                 class="img-fluid"
                            />
                            <?php endif; ?>
                        </div> <!--/.about-image-->

                        <div class="about-stats">
                            <div class="row">
                                <div class="col-sm-6 col-md-3">
                                    <!-- SINGLE STAT -->
                                    <div class="about-stat d-sm-flex flex-sm-column justify-content-sm-between">
                                        <p><?php echo $service_1_title; ?></p>
                                        <h3><?php echo $service_1_desc; ?></h3>
                                    </div> <!--/.about-stat-->
                                    <!-- END SINGLE STAT -->
                                    <!-- SINGLE STAT -->
                                </div> <!--/.col-md-3-->
                                <div class="col-sm-6 col-md-3">
                                    <div class="about-stat d-sm-flex flex-sm-column justify-content-sm-between">
                                         <p><?php echo $service_2_title; ?></p>
                                        <h3><?php echo $service_2_desc; ?></h3>
                                    </div> <!--/.about-stat-->
                                </div> <!--/.col-md-3-->
                                <!-- END SINGLE STAT -->
                                <!-- SINGLE STAT -->
                                <div class="col-sm-6 col-md-3">
                                    <div class="about-stat d-sm-flex flex-sm-column justify-content-sm-between">
                                         <p><?php echo $service_3_title; ?></p>
                                        <h3><?php echo $service_3_desc; ?></h3>
                                    </div> <!--/.about-stat-->
                                </div> <!--/.col-md-3-->
                                <!-- END SINGLE STAT -->
                                <!-- SINGLE STAT -->
                                <div class="col-sm-6 col-md-3">
                                    <div class="about-stat d-sm-flex flex-sm-column justify-content-sm-between">
                                        <p><?php echo $service_4_title; ?></p>
                                        <h3><?php echo $service_4_desc; ?></h3>
                                    </div> <!--/.about-stat-->
                                </div> <!--/.col-md-3-->
                                <!-- END SINGLE STAT -->
                            </div> <!--/.row-->
                        </div> <!--/.about-stats-->

                        <div class="about-content">
                             <h2><?php echo $our_story_title; ?></h2>
                             <?php echo $our_story_text; ?>
                        </div> <!--/.about-content-->

                    </article> <!--/.about-article-->
                </div> <!--/.container-xl-->
            </section> <!--/.about-->

            <section class="journey">
                <div class="container-xl">
                    <header class="journey-header">
                        <h2>Unsere Reise</h2>                    
                    </header> <!--/.journey-header-->

                    <div class="journey-content">

                        <div class="journey-timeline">

                            <div class="row">

                                <div class="col-md-3">
                                    <article class="journey-article">
                                        <!-- IF IMAGE EXISTS -->
                                        <?php if(!empty($journey_icon) ) : ?>
                                        <img src="<?php echo $journey_icon['url']; ?>" alt="<?php echo $journey_icon['alt']; ?>">
                                        <?php endif; ?>
                                        <h3><?php echo $journey_year; ?></h3>
                                        <p><?php echo $journey_desc; ?></p>
                                    </article> <!--/.journey-article-->
                                </div> <!--/.col-md-3-->

                                <div class="col-md-3">
                                    <article class="journey-article">
                                        <!-- IF IMAGE EXISTS -->
                                        <?php if(!empty($journey_icon2) ) : ?>
                                        <img src="<?php echo $journey_icon2['url']; ?>" alt="<?php echo $journey_icon2['alt']; ?>">
                                        <?php endif; ?>
                                        <h3><?php echo $journey_year2; ?></h3>
                                        <p><?php echo $journey_desc2; ?></p>
                                    </article> <!--/.journey-article-->
                                </div> <!--/.col-md-3-->

                                <div class="col-md-3">
                                    <article class="journey-article">
                                         <!-- IF IMAGE EXISTS -->
                                        <?php if(!empty($journey_icon3) ) : ?>
                                        <img src="<?php echo $journey_icon3['url']; ?>" alt="<?php echo $journey_icon3['alt']; ?>">
                                        <?php endif; ?>
                                        <h3><?php echo $journey_year3; ?></h3>
                                        <p><?php echo $journey_desc3; ?></p>
                                    </article> <!--/.journey-article-->
                                </div> <!--/.col-md-3-->

                                <div class="col-md-3">
                                    <article class="journey-article">
                                         <!-- IF IMAGE EXISTS -->
                                        <?php if(!empty($journey_icon4) ) : ?>
                                        <img src="<?php echo $journey_icon4['url']; ?>" alt="<?php echo $journey_icon4['alt']; ?>">
                                        <?php endif; ?>
                                        <h3><?php echo $journey_year4; ?></h3>
                                        <p><?php echo $journey_desc4; ?></p>
                                    </article> <!--/.journey-article-->
                                </div> <!--/.col-md-3-->

                            </div> <!--/.row-->

                            <div class="journey-timeline__deco d-none d-md-block"></div>

                        </div> <!--/.journey-timeline-->

                    </div> <!--/.journey-content-->
                </div> <!--/.container-xl-->
            </section> <!--/.journey-->

            <section class="about-slides">
                <div class="container-xl">
                    <div class="d-flex align-items-center about-slides__top">
                        <header class="about-slides__header">
                            <h2 class="m-0">Wir können unsere Kunden glücklich machen!</h2>
                        </header> <!--/.about-slides__header-->

                        <div class="about-slides__arrows">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <a href="javascript:;" class="slide-prev">
                                        <svg width="27px" height="24px" viewBox="0 0 27 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="About-Us" transform="translate(-1098.000000, -2700.000000)" fill="#000000" fill-rule="nonzero">
                                                    <g id="Group-9" transform="translate(1098.000000, 2697.000000)">
                                                        <g id="Arrow---Left" transform="translate(0.000000, 3.914455)">
                                                            <g transform="translate(13.395823, 11.085545) rotate(90.000000) translate(-13.395823, -11.085545) translate(2.310277, -2.310277)" id="Combined-Shape">
                                                                <path d="M11.0857091,0 C11.7070295,0 12.2205125,0.458143434 12.3017783,1.05255353 L12.3129818,1.21780205 L12.312,22.6251383 L20.0741385,14.8913048 C20.5523853,14.4147005 21.3294495,14.4130401 21.8097604,14.8875962 C22.2464065,15.3190108 22.2874845,15.9954764 21.9320308,16.4729846 L21.8134979,16.6098244 L11.9560432,26.4334276 C11.8930029,26.4962514 11.8247771,26.5508194 11.7527288,26.5971314 C11.7310408,26.6102121 11.7088537,26.6235272 11.6862225,26.6361508 C11.6668217,26.6477618 11.6466754,26.658254 11.6263101,26.6681525 C11.5966748,26.6819003 11.5660603,26.6953304 11.53482,26.7075256 C11.5107338,26.717435 11.4873073,26.7257094 11.4636958,26.7332563 C11.4344143,26.7422286 11.4032121,26.7509456 11.3715334,26.7584441 C11.3494159,26.7640187 11.3281287,26.7684347 11.3067583,26.7722858 C11.2749616,26.7777012 11.2420582,26.7823109 11.208763,26.7855999 C11.1833699,26.7884398 11.1582102,26.7901499 11.1330268,26.7910948 C11.1177552,26.791339 11.1017682,26.7916451 11.0857091,26.7916451 L11.0381675,26.7910363 C11.0140801,26.7901029 10.9900151,26.7884692 10.9660063,26.7861356 L11.0857091,26.7916451 C11.0082624,26.7916451 10.9324912,26.7845268 10.8590238,26.7709135 C10.841477,26.7677565 10.8234633,26.7639961 10.8055258,26.7598307 C10.7685801,26.7511799 10.7330042,26.74118 10.6981238,26.729669 C10.6807961,26.7240191 10.6622815,26.7174392 10.6439032,26.7104044 C10.6069752,26.6961733 10.5717707,26.6807033 10.5374813,26.6636867 C10.5213578,26.6557814 10.5044771,26.646928 10.4877685,26.6376568 C10.4605102,26.6224383 10.4346064,26.6067618 10.4093564,26.5901834 C10.3914865,26.578487 10.3728858,26.5655333 10.3545789,26.5520081 L10.3404346,26.5414692 C10.2972366,26.5086597 10.2562998,26.4730663 10.2178962,26.4349591 L10.2167559,26.4334992 L0.357665026,16.609896 C-0.120621464,16.1333311 -0.119012635,15.3622631 0.361258446,14.8876675 C0.797868521,14.4562169 1.47976237,14.4183135 1.95947843,14.7730379 L2.09688046,14.8912332 L9.85745455,22.6218909 L9.85843638,1.21780205 C9.85843638,0.54522855 10.4079051,0 11.0857091,0 Z"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                                <div>
                                    <p class="m-0"><span class="current-slide"></span>/<span class="slide-count"></span></p>
                                </div>
                                <div>
                                    <a href="javascript:;" class="slide-next">
                                        <svg width="28px" height="23px" viewBox="0 0 28 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="About-Us" transform="translate(-1248.000000, -2701.000000)" fill="#000000" fill-rule="nonzero">
                                                    <g id="Group-9" transform="translate(1098.000000, 2697.000000)">
                                                        <g id="Arrow---Left-Copy" transform="translate(163.810277, 15.310277) scale(-1, 1) translate(-163.810277, -15.310277) translate(150.414455, 4.224732)">
                                                            <g id="Arrow---Left" transform="translate(13.395823, 11.085545) rotate(90.000000) translate(-13.395823, -11.085545) translate(2.310277, -2.310277)">
                                                                <path d="M11.0857091,0 C11.7070295,0 12.2205125,0.458143434 12.3017783,1.05255353 L12.3129818,1.21780205 L12.312,22.6251383 L20.0741385,14.8913048 C20.5523853,14.4147005 21.3294495,14.4130401 21.8097604,14.8875962 C22.2464065,15.3190108 22.2874845,15.9954764 21.9320308,16.4729846 L21.8134979,16.6098244 L11.9560432,26.4334276 C11.8930029,26.4962514 11.8247771,26.5508194 11.7527288,26.5971314 C11.7310408,26.6102121 11.7088537,26.6235272 11.6862225,26.6361508 C11.6668217,26.6477618 11.6466754,26.658254 11.6263101,26.6681525 C11.5966748,26.6819003 11.5660603,26.6953304 11.53482,26.7075256 C11.5107338,26.717435 11.4873073,26.7257094 11.4636958,26.7332563 C11.4344143,26.7422286 11.4032121,26.7509456 11.3715334,26.7584441 C11.3494159,26.7640187 11.3281287,26.7684347 11.3067583,26.7722858 C11.2749616,26.7777012 11.2420582,26.7823109 11.208763,26.7855999 C11.1833699,26.7884398 11.1582102,26.7901499 11.1330268,26.7910948 C11.1177552,26.791339 11.1017682,26.7916451 11.0857091,26.7916451 L11.0381675,26.7910363 C11.0140801,26.7901029 10.9900151,26.7884692 10.9660063,26.7861356 L11.0857091,26.7916451 C11.0082624,26.7916451 10.9324912,26.7845268 10.8590238,26.7709135 C10.841477,26.7677565 10.8234633,26.7639961 10.8055258,26.7598307 C10.7685801,26.7511799 10.7330042,26.74118 10.6981238,26.729669 C10.6807961,26.7240191 10.6622815,26.7174392 10.6439032,26.7104044 C10.6069752,26.6961733 10.5717707,26.6807033 10.5374813,26.6636867 C10.5213578,26.6557814 10.5044771,26.646928 10.4877685,26.6376568 C10.4605102,26.6224383 10.4346064,26.6067618 10.4093564,26.5901834 C10.3914865,26.578487 10.3728858,26.5655333 10.3545789,26.5520081 L10.3404346,26.5414692 C10.2972366,26.5086597 10.2562998,26.4730663 10.2178962,26.4349591 L10.2167559,26.4334992 L0.357665026,16.609896 C-0.120621464,16.1333311 -0.119012635,15.3622631 0.361258446,14.8876675 C0.797868521,14.4562169 1.47976237,14.4183135 1.95947843,14.7730379 L2.09688046,14.8912332 L9.85745455,22.6218909 L9.85843638,1.21780205 C9.85843638,0.54522855 10.4079051,0 11.0857091,0 Z" id="Combined-Shape"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div> <!--/.d-flex-->
                        </div> <!--/.about-slides__arrows-->
                    </div> <!--/.d-flex-->
                </div> <!--/.container-xl-->
                <!-- About Slides -->
                <div class="about-slides__container">
                    <div class="about-splide ml-auto">
                        <div class="splide__track">
                            <div class="splide__list">

                                <div class="splide__slide">
                                    <div class="splide__slide__container">
                                         <!-- IF IMAGE EXISTS -->
                                        <?php if(!empty($slider_image1) ) : ?>
                                        <img src="<?php echo $slider_image1['url']; ?>" alt="<?php echo $slider_image1['alt']; ?>">
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="splide__slide">
                                    <div class="splide__slide__container">
                                         <!-- IF IMAGE EXISTS -->
                                        <?php if(!empty($slider_image2) ) : ?>
                                        <img src="<?php echo $slider_image2['url']; ?>" alt="<?php echo $slider_image2['alt']; ?>">
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="splide__slide">
                                    <div class="splide__slide__container">
                                        <!-- IF IMAGE EXISTS -->
                                        <?php if(!empty($slider_image3) ) : ?>
                                        <img src="<?php echo $slider_image3['url']; ?>" alt="<?php echo $slider_image3['alt']; ?>">
                                        <?php endif; ?>                                    
                                    </div>
                                </div>

                                <div class="splide__slide">
                                    <div class="splide__slide__container">
                                        <!-- IF IMAGE EXISTS -->
                                        <?php if(!empty($slider_image4) ) : ?>
                                        <img src="<?php echo $slider_image4['url']; ?>" alt="<?php echo $slider_image4['alt']; ?>">
                                        <?php endif; ?>                                    
                                    </div>
                                </div>

                                <div class="splide__slide">
                                    <div class="splide__slide__container">
                                        <!-- IF IMAGE EXISTS -->
                                        <?php if(!empty($slider_image5) ) : ?>
                                        <img src="<?php echo $slider_image5['url']; ?>" alt="<?php echo $slider_image5['alt']; ?>">
                                        <?php endif; ?>                                    
                                    </div>
                                </div>

                                <div class="splide__slide">
                                    <div class="splide__slide__container">
                                        <!-- IF IMAGE EXISTS -->
                                        <?php if(!empty($slider_image6) ) : ?>
                                        <img src="<?php echo $slider_image6['url']; ?>" alt="<?php echo $slider_image6['alt']; ?>">
                                        <?php endif; ?>                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!--/.about-splide-->
                </div> <!--/.about-slides__container-->
                <!-- End About Slides -->
                <div class="container-xl">
                    <div class="slides-content">
                        <div class="slide-content"><?php echo $slider_image1['alt']; ?></div>
                        <div class="slide-content"><?php echo $slider_image2['alt']; ?></div>
                        <div class="slide-content"><?php echo $slider_image3['alt']; ?></div>
                        <div class="slide-content"><?php echo $slider_image4['alt']; ?></div>
                        <div class="slide-content"><?php echo $slider_image5['alt']; ?></div>
                        <div class="slide-content"><?php echo $slider_image6['alt']; ?></div>
                    </div> <!--/.slides-content-->
                </div> <!--/.container-xl-->
            </section> <!--/.about-slides-->

        </section> <!--/.content-->
        <!-- END CONTENT -->

<?php get_footer(); ?>