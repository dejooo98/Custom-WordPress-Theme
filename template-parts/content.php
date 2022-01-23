<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="content-post">
		<?php
		if ( is_singular() ) : ?>
				<header class="post-header">
                        <div>
                            <h1><?php the_title(); ?></h1>
                            <p><?php the_date(); ?><a href="javascript:;">&nbsp; <?php the_category(', '); ?></a></p>
                            <div class="d-none d-md-block post-header__deco"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home/hero-deco2.svg" alt="Header decoration"></div> <!--/.post-header__deco-->
						</div>
                    </header> <!--/.post-header-->
					<?php
			
			
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				
			</div><!-- .entry-meta -->
		<?php endif; ?>
		
	</header><!-- .entry-header -->

	<div class="post-content">
		<?php
           if (has_post_thumbnail()):?>
              <img
                  src="<?php echo get_the_post_thumbnail_url(); ?>"
                  class="img-fluid" 
              />
            <?php endif;

		the_content(
			
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'starter' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'starter' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
