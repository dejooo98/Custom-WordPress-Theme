<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bootstrap_to_WordPress
 */

get_header();
?>

<!-- MAIN CONTENT
================================================== -->
<section class="content post">
	 <div class="container-xl">
                <article class="post-article">

		<?php
		while ( have_posts() ) :
			the_post();
			
			get_template_part( 'template-parts/content', get_post_type() ); ?>
			
			<div class="post-social d-flex align-items-center">
                        <p class="m-0 mr-4">Teile diese Geschichte, wähle deine Plattform!</p>
                        <ul class="d-flex align-items-center">
                          <li class="ml-2 mr-2">  <?php echo do_shortcode('[Sassy_Social_Share]') ?></li>
                            <!-- <li class="ml-2 mr-2"><a href="javascript:;"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/blogs/post-facebook.svg" alt="Facebook share"></a></li>
                            <li class="ml-2 mr-2"><a href="javascript:;"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/blogs/post-twitter.svg" alt="Twitter share"></a></li>
                            <li class="ml-2 mr-2"><a href="javascript:;"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/blogs/post-linkedin.svg" alt="LinkedIn share"></a></li>
                            <li class="ml-2 mr-2"><a href="javascript:;"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/blogs/post-email.svg" alt="Email share"></a></li> -->
                        </ul>
                    </div> <!--/.post-social-->
	<?php ?>

	  <!-- POST RELATED -->
                    <section class="post-related">
                        <h2>Zusammenhängende Posts</h2>
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
                                                src="<?php echo get_the_post_thumbnail_url(($post_item['ID'])); ?>"
                                                                                            
                                                class="img-fluid" 
                                            />
                                        <?php endif; ?>                                 
                                    </a> <!--/.news-image-->
                                <p class="news-date"><?php echo get_the_date(); ?></p>
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
                    </section> <!--/.post-related-->
	
	<?php	endwhile; // End of the loop. ?>
		
	</article><!-- #main --> 

	</div><!-- primary -->
	</section><!-- container -->

<?php
get_footer();
