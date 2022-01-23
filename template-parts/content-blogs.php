<?php
/**
 * Template part for displaying blogs
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package starter
 */

if ('post' === get_post_type()) : ?>

    <article class="blogs-article col-md-<?php echo $args['isFirst'] ? '12' : '6'; ?>">
        <!-- ARTICLE IMAGE -->

        <a href="<?php echo get_permalink($post_item['ID']) ?>" class="blogs-article__image">
            <?php
            if (get_the_post_thumbnail($post_item['ID'])):?>
                <img
                    src="<?php echo get_the_post_thumbnail_url(($post_item['ID'])); ?>"
                    class="img-fluid"
                />
            <?php endif; ?>
        </a> <!--/.blogs-article__image-->

        <!-- END ARTICLE IMAGE -->
        <!-- ARTICLE CONTENT -->
        <div class="blogs-article__content">
            <span><?php the_date(); ?></span>
            <?php the_title('<h1 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h1>'); ?>
            <a href="<?php the_permalink(); ?>">WEITERLESEN
                <span>
                    <svg width="8px" height="13px" viewBox="0 0 8 13" version="1.1"
                         xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                           fill-rule="evenodd">
                            <g id="Home-Final" transform="translate(-265.000000, -4932.000000)"
                               stroke="#017DCF" stroke-width="2">
                                <g id="BLOG" transform="translate(165.000000, 4343.000000)">
                                    <g id="Group-4" transform="translate(0.000000, 135.000000)">
                                        <g id="Group-5" transform="translate(0.000000, 275.000000)">
                                            <g id="Group-19"
                                               transform="translate(0.000000, 170.000000)">
                                                <polyline id="Rectangle-12"
                                                          transform="translate(101.500000, 15.500000) scale(1, -1) rotate(135.000000) translate(-101.500000, -15.500000) "
                                                          points="98 19 98 12 105 12"></polyline>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </span>
            </a>
        </div> <!--/.blogs-article__content-->
        <!-- END ARTICLE CONTENT -->
    </article> <!--/.blogs-article col-md-12-->

<?php endif; ?>
