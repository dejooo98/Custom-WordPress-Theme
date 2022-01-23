<?php
/*
    Template Name: Banks Page
*/


// Advanced Custom Fields
$banks_header                        =  get_field('banks_header');

$banks_content_header                =  get_field('banks_content_header');
$banks_content_paragraph             =  get_field('banks_content_paragraph');
$banks_content_image                 =  get_field('banks_content_image');
$banks_content_subtitle              =  get_field('banks_content_subtitle');
$banks_content_subparagraph          =  get_field('banks_content_subparagraph');

$banks_flow_title                    =  get_field('banks_flow_title');
$banks_timeline_icon_1               =  get_field('banks_timeline_icon_1');
$banks_timeline_title_1              =  get_field('banks_timeline_title_1');
$banks_timeline_icon_2               =  get_field('banks_timeline_icon_2');
$banks_timeline_title_2              =  get_field('banks_timeline_title_2');
$banks_timeline_icon_3               =  get_field('banks_timeline_icon_3');
$banks_timeline_title_3              =  get_field('banks_timeline_title_3');
$banks_flow_paragraph                =  get_field('banks_flow_paragraph');

$banks_article_image                 =  get_field('banks_article_image');
$banks_article_title                 =  get_field('banks_article_title');
$banks_article_paragraph             =  get_field('banks_article_paragraph');

$bank_title                          =  get_field('bank_title');
$noonis_banks1                       =  get_field('noonis_banks1');
$noonis_banks2                       =  get_field('noonis_banks2');
$noonis_banks3                       =  get_field('noonis_banks3');
$noonis_banks4                       =  get_field('noonis_banks4');
$bank_image                          =  get_field('bank_image');


get_header(); ?>

<!-- CONTENT -->
        <section class="content banks">
            <!-- BANKS INTRO -->
            <section class="banks-intro">
                <div class="container-xl">
                    <!-- BANKS HEADER -->
                    <header class="banks-header">
                        <h2><?php echo $banks_header; ?></h2>
                    </header> <!--/.banks-header-->
                    <!-- END BANKS HEADER -->
                    <!-- BANKS IMAGE -->
                    <div class="banks-image">
                        <?php
                            if (has_post_thumbnail()):?>
                            <img
                                src="<?php echo get_the_post_thumbnail_url(); ?>"
                                class="img-fluid" 
                            />
                            <?php endif; ?>
                    </div> <!--/.banks-image-->
                    <!-- END BANKS IMAGE -->
                </div> <!--/.container-xl-->
            </section> <!--/.banks-intro-->
            <!-- END BANKS INTRO -->
            <!-- BANKS CONTENT -->
            <section class="banks-content">
                <div class="container-xl">
                    <h2><?php echo $banks_content_header; ?></h2>
                    <p><?php echo $banks_content_paragraph; ?></p>
                    <br>
                    <br>
                    <article class="banks-content__article d-md-flex align-items-md-center">
                        <div>
                            <?php if(!empty($banks_content_image) ) : ?>
                                <img src="<?php echo $banks_content_image['url']; ?>" alt="<?php echo $banks_content_image['alt']; ?>">
                            <?php endif; ?>
                        </div> <!--/.banks-article__image-->
                        <div>
                            <div>
                               <h2><?php echo $banks_content_subtitle; ?></h2>
                                <p><?php echo $banks_content_subparagraph; ?></p>
                            </div>
                        </div> <!--/.banks-article__content-->
                    </article> <!--/.banks-content__article-->
                </div> <!--/.container-xl-->
            </section> <!--/.banks-content-->
            <!-- END BANKS CONTENT -->
            <!-- BANKS FLOW -->
            <section class="banks-flow">
                <div class="container-xl">

                    <div class="banks-flow__wrap">
                         <h2><?php echo $banks_flow_title; ?></h2>
                        <div class="banks-flow__container">
                            <div class="banks-flow__timeline">
                                <div class="row">
                                    <div class="col-md-4">
                                        <article>
                                            <?php if(!empty($banks_timeline_icon_1) ) : ?>
                                              <img src="<?php echo $banks_timeline_icon_1['url']; ?>" alt="<?php echo $banks_timeline_icon_1['alt']; ?>">
                                            <?php endif; ?>
                                            <h3><?php echo $banks_timeline_title_1; ?></h3>
                                        </article>
                                    </div> <!--/.col-md-4-->
                                    <div class="col-md-4">
                                        <article>
                                            <?php if(!empty($banks_timeline_icon_2) ) : ?>
                                              <img src="<?php echo $banks_timeline_icon_2['url']; ?>" alt="<?php echo $banks_timeline_icon_2['alt']; ?>">
                                            <?php endif; ?>
                                            <h3><?php echo $banks_timeline_title_2; ?></h3>
                                         </article>
                                    </div> <!--/.col-md-4-->
                                    <div class="col-md-4">
                                       <article>
                                            <?php if(!empty($banks_timeline_icon_3) ) : ?>
                                              <img src="<?php echo $banks_timeline_icon_3['url']; ?>" alt="<?php echo $banks_timeline_icon_3['alt']; ?>">
                                            <?php endif; ?>
                                            <h3><?php echo $banks_timeline_title_3; ?></h3>
                                        </article>
                                    </div> <!--/.col-md-4-->
                                </div> <!--/.row-->
                                <div class="banks-timeline__deco d-none d-md-block"></div> <!--/.banks-timeline__deco-->
                            </div> <!--/.banks-flow__timeline-->
                            <p><?php echo $banks_flow_paragraph; ?></p>
                        </div> <!--/.banks-flow__container-->
                    </div> <!--/.banks-flow__wrap-->

                </div> <!--/.container-xl-->
            </section> <!--/.banks-flow-->
            <!-- END BANKS FLOW -->
            <!-- BANKS ARTICLES -->
            <section class="banks-articles">
                <div class="container-xl">
                    <!-- SINGLE BANK ARTICLE -->
                    <article class="banks-article d-md-flex align-items-md-center">
                        <div class="banks-article__image">
                                <?php if(!empty($banks_article_image) ) : ?> 
                                <img src="<?php echo $banks_article_image['url']; ?>" alt="<?php echo $banks_article_image['alt']; ?>">
                                <?php endif; ?>                        
                            </div> <!--/.banks-article__image-->
                        <div class="banks-article__content">
                            <div>
                                <h2><?php echo $banks_article_title; ?></h2>
                                <p><?php echo $banks_article_paragraph;?></p>
                            </div>
                        </div> <!--/.banks-article__content-->
                    </article> <!--/.banks-article-->
                    <!-- END SINGLE BANK ARTICLE -->
                    <!-- SINGLE BANK ARTICLE -->
                    <article class="banks-article d-md-flex align-items-md-center">
                        <div class="banks-article__image order-md-2">
                                <?php if(!empty($bank_image) ) : ?>
                                <img src="<?php echo $bank_image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                <?php endif; ?>                        
                            </div> <!--/.banks-article__image-->
                        <div class="banks-article__content order-md-1">
                          <div>
                              <h2><?php echo $bank_title; ?></h2>
                               <ul class="banks-article__list">
                                    <li><?php echo $noonis_banks1; ?></li>
                                    <li><?php echo $noonis_banks2; ?></li>
                                    <li><?php echo $noonis_banks3; ?></li>
                                    <li><?php echo $noonis_banks4; ?></li>
                                </ul> <!--/.banks-list-->
                          </div>
                        </div> <!--/.banks-article__content-->
                    </article> <!--/.banks-article-->
                    <!-- END SINGLE BANK ARTICLE -->
                </div> <!--/.container-xl-->
            </section> <!--/.banks-articles-->
            <!-- END BANKS ARTICLES -->
        </section> <!--/.content-->
        <!-- END CONTENT -->

<?php get_footer(); ?>