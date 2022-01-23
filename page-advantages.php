<?php
/*
    Template Name: Advantages Page
*/


//Advanced Custom Fields

$button                              =  get_field('button');

$advantages_1_icon                   =  get_field('advantages_1_icon');
$advantages_2_icon                   =  get_field('advantages_2_icon');
$advantages_3_icon                   =  get_field('advantages_3_icon');
$advantages_4_icon                   =  get_field('advantages_4_icon');

$advantages_1_title                  =  get_field('advantages_1_title');
$advantages_2_title                  =  get_field('advantages_2_title');
$advantages_3_title                  =  get_field('advantages_3_title');
$advantages_4_title                  =  get_field('advantages_4_title');

$advantages_1_description            =  get_field('advantages_1_description');
$advantages_2_description            =  get_field('advantages_2_description');
$advantages_3_description            =  get_field('advantages_3_description');
$advantages_4_description            =  get_field('advantages_4_description');

$work_1_icon                         =  get_field('work_1_icon');
$work_1_title                        =  get_field('work_1_title');

$work_2_icon                         =  get_field('work_2_icon');
$work_2_title                        =  get_field('work_2_title');

$work_3_icon                         =  get_field('work_3_icon');
$work_3_title                        =  get_field('work_3_title');

$adventages_work_text                =  get_field('adventages_work_text');

$adventages_about_image              =  get_field('adventages_about_image');
$adventages_about_title              =  get_field('adventages_about_title');
$adventages_about_description        =  get_field('adventages_about_description');




 get_header(); ?>

 <!-- CONTENT -->
        <section class="content advantages">
            <!-- ADVANTAGES INTRO -->
            <section class="advantages-intro">
                <div class="container-xl">
                    <!-- ADVANTAGES HEADER -->
                    <header class="advantages-header">
                        <h2>Von der Planung bis zur Montage alles aus einer Hand</h2>
                    </header> <!--/.advantages-header-->
                    <!-- END ADVANTAGES HEADER -->
                    <!-- ADVANTAGES IMAGE -->
                    <div class="advantages-image">
                        <?php
                            if (has_post_thumbnail()):?>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>"
                            class="img-fluid"
                            />
                        <?php endif; ?>                    
                    </div> <!--/.advantages-image-->
                    <!-- END ADVANTAGES IMAGE -->
                </div> <!--/.container-xl-->
            </section> <!--/.advantages-intro-->
            <!-- END ADVANTAGES INTRO -->
            <!-- OUR ADVANTAGES -->
            <section class="our-advantages">
                <div class="container-xl">
                    <h2><?php the_title(); ?></h2>
                    <div class="advantages-articles">
                         <div class="row">
                             <div class="col-md-6">
                                 <article class="advantages-article">
                                      <!-- IF IMAGE EXISTS -->
                                        <?php if(!empty($advantages_1_icon) ) : ?>
                                        <img src="<?php echo $advantages_1_icon['url']; ?>" alt="<?php echo $advantages_1_icon['alt']; ?>">
                                        <?php endif; ?>
                                     <h3><?php echo $advantages_1_title; ?></h3>
                                     <p><?php echo $advantages_1_description; ?></p>
                                 </article> <!--/.advantages-article-->
                             </div> <!--/.col-md-6-->
                             <div class="col-md-6">
                                 <article class="advantages-article">
                                     <!-- IF IMAGE EXISTS -->
                                        <?php if(!empty($advantages_2_icon) ) : ?>
                                        <img src="<?php echo $advantages_2_icon['url']; ?>" alt="<?php echo $advantages_2_icon['alt']; ?>">
                                        <?php endif; ?>
                                     <h3><?php echo $advantages_2_title; ?></h3>
                                     <p><?php echo $advantages_2_description; ?></p>
                                 </article> <!--/.advantages-article-->
                             </div> <!--/.col-md-6-->
                             <div class="col-md-6">
                                 <article class="advantages-article">
                                     <!-- IF IMAGE EXISTS -->
                                        <?php if(!empty($advantages_3_icon) ) : ?>
                                        <img src="<?php echo $advantages_3_icon['url']; ?>" alt="<?php echo $advantages_3_icon['alt']; ?>">
                                        <?php endif; ?>
                                     <h3><?php echo $advantages_1_title; ?></h3>
                                     <p><?php echo $advantages_1_description; ?></p>
                                 </article> <!--/.advantages-article-->
                             </div> <!--/.col-md-6-->
                             <div class="col-md-6">
                                 <article class="advantages-article">
                                     <!-- IF IMAGE EXISTS -->
                                        <?php if(!empty($advantages_4_icon) ) : ?>
                                        <img src="<?php echo $advantages_4_icon['url']; ?>" alt="<?php echo $advantages_4_icon['alt']; ?>">
                                        <?php endif; ?>
                                     <h3><?php echo $advantages_4_title; ?></h3>
                                     <p><?php echo $advantages_4_description; ?></p>
                                 </article> <!--/.advantages-article-->
                             </div> <!--/.col-md-6-->
                         </div> <!--/.row-->
                    </div> <!--/.advantages-articles-->
                </div> <!--/.our-advantages-->
            </section> <!--/.our-advantages-->
            <!-- END OUR ADVANTAGES -->
            <!-- ADVANTAGES WORK -->
            <section class="advantages-work">
                <div class="container-xl">

                    <div class="advantages-work__wrap">
                        <h2>Wie es funktioniert</h2>
                        <div class="advantages-work__container">
                            <div class="advantages-work__timeline">
                                <div class="row">
                                    <div class="col-md-4">
                                        <article>
                                            <?php if(!empty($work_1_icon) ) : ?>
                                            <img src="<?php echo $work_1_icon['url']; ?>" alt="<?php echo $work_1_icon['alt']; ?>">
                                            <?php endif; ?>
                                            <h3><?php echo $work_1_title; ?></h3>
                                        </article>
                                    </div> <!--/.col-md-4-->
                                    <div class="col-md-4">
                                        <article>
                                             <?php if(!empty($work_2_icon) ) : ?>
                                            <img src="<?php echo $work_2_icon['url']; ?>" alt="<?php echo $work_2_icon['alt']; ?>">
                                            <?php endif; ?>
                                            <h3><?php echo $work_2_title; ?></h3>
                                        </article>
                                    </div> <!--/.col-md-4-->
                                    <div class="col-md-4">
                                        <article>
                                             <?php if(!empty($work_3_icon) ) : ?>
                                            <img src="<?php echo $work_3_icon['url']; ?>" alt="<?php echo $work_3_icon['alt']; ?>">
                                            <?php endif; ?>
                                            <h3><?php echo $work_3_title; ?></h3>
                                        </article>
                                    </div> <!--/.col-md-4-->
                                </div> <!--/.row-->
                                <div class="advantages-timeline__deco d-none d-md-block"></div> <!--/.advantages-timeline__deco-->
                            </div> <!--/.advantages-work__timeline-->
                            <p> <?php echo $adventages_work_text; ?></p>
                        </div> <!--/.advantages-work__container-->
                    </div> <!--/.advantages-work__wrap-->

                </div> <!--/.container-xl-->
            </section> <!--/.advantages-work-->
            <!-- END ADVANTAGES WORK -->
            <!-- ADVANTAGES ABOUT -->
            <section class="advantages-about">
                <div class="container-xl">
                    <!-- ADVANTAGES ABOUT ARTICLE-->
                    <article class="advantages-about__article">
                        <div class="row">
                            <div class="col-md-6">
                                <?php if(!empty($adventages_about_image) ) : ?>
                                <img src="<?php echo $adventages_about_image['url']; ?>"  class="img-fluid" alt="<?php echo $adventages_about_image['alt']; ?>">
                                <?php endif; ?>                            
                            </div> <!--/.col-md-6-->
                            <div class="col-md-6">
                                <h2><?php echo $adventages_about_title; ?></h2>
                                <p><?php echo $adventages_about_description; ?></p>
                                <a href="<?php echo $button; ?>" class="btn btn-outline-primary">Über uns</a>
                            </div> <!--/.col-md-6-->
                        </div> <!--/.row-->
                    </article> <!--/.advantages-about__article-->
                    <!-- END ADVANTAGES ABOUT ARTICLE-->
                </div> <!--/.container-xl-->
            </section> <!--/.advantages-about-->
            <!-- END ADVANTAGES ABOUT -->
        </section> <!--/.content-->
        <!-- END CONTENT -->

<?php get_footer(); ?>