<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Noonis
 */

?>

<div class="container-xl">

	<header class="blogs-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'noonis-gmbh' ); ?></h1>
		  <div class="d-none d-md-block blog-header__deco1"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home/hero-deco1.svg" alt="Header decoration"></div> <!--/.blog-header__deco1-->
		 <div class="d-none d-md-block blog-header__deco2"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home/hero-deco2.svg" alt="Header decoration"></div> <!--/.blog-header__deco2-->
	</header> <!--/.blogs-header-->
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'noonis-gmbh' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'noonis-gmbh' ); ?></p>
			<?php
		

		else :
			?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'noonis-gmbh' ); ?></p>
			<?php
		

		endif;
		?>
	</div><!-- .page-content -->
	</div><!-- .no-results -->
