<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php // Show the selected frontpage content.
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
		?>

		<!-- begin intro -->
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> >

			<?php if ( has_post_thumbnail() ) :
				$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );

				$post_thumbnail_id = get_post_thumbnail_id( $post->ID );

				$thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );

				// Calculate aspect ratio: h / w * 100%.
				$ratio = $thumbnail_attributes[2] / $thumbnail_attributes[1] * 100;
				?>

				<div class="panel-image" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">
					<div class="panel-image-prop" style="padding-top: <?php echo esc_attr( $ratio ); ?>%"></div>
				</div><!-- .panel-image -->

			<?php endif; ?>

			<div class="panel-content">
				<h1>People</h1>
				<div class="wrap wrap-center">
					<header class="entry-header">
						<h2 class="entry-title">The Couple</h2>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/intro.jpg">
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php
							/* translators: %s: Name of current post */
							the_content( sprintf(
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
								get_the_title()
							) );
						?>
					</div><!-- .entry-content -->

				</div><!-- .wrap -->
				<h2 class="entry-title entry-title-center">My Maine(s) of Honor</h2>
				<div class="wrap wrap-half-half">
					<div class="flex-item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/intro.jpg">
						<h3>Test</h3>
						<p>We are so excited to have each of you join us for our wedding weekend in beautiful Booksbay, Maine. We are so excited to have each of you join us for our wedding weekend in beautiful Booksbay, Maine. We are so excited to have each of you join us for our wedding weekend in beautiful Booksbay, Maine.</p>
					</div>
					<div class="flex-item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/intro.jpg">
						<h3>Test</h3>
						<p>We are so excited to have each of you join us for our wedding weekend in beautiful Booksbay, Maine. We are so excited to have each of you join us for our wedding weekend in beautiful Booksbay, Maine. We are so excited to have each of you join us for our wedding weekend in beautiful Booksbay, Maine.</p>
					</div>
				</div><!-- .wrap -->
				<h2 class="entry-title entry-title-center">Best of Men</h2>
				<div class="wrap wrap-half-half">
					<div class="flex-item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/intro.jpg">
						<h3>Test</h3>
						<p>We are so excited to have each of you join us for our wedding weekend in beautiful Booksbay, Maine. We are so excited to have each of you join us for our wedding weekend in beautiful Booksbay, Maine. We are so excited to have each of you join us for our wedding weekend in beautiful Booksbay, Maine.</p>
					</div>
					<div class="flex-item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/intro.jpg">
						<h3>Test</h3>
						<p>We are so excited to have each of you join us for our wedding weekend in beautiful Booksbay, Maine. We are so excited to have each of you join us for our wedding weekend in beautiful Booksbay, Maine. We are so excited to have each of you join us for our wedding weekend in beautiful Booksbay, Maine.</p>
					</div>
				</div><!-- .wrap -->
			</div><!-- .panel-content -->

		</article><!-- #post-## -->
		<!-- end intro -->

		
		
		<?php	endwhile;
		else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
			get_template_part( 'template-parts/post/content', 'none' );
		endif; ?>

		<?php
		// Get each of our panels and show the post data.
		if ( 0 !== twentyseventeen_panel_count() || is_customize_preview() ) : // If we have pages to show.

			/**
			 * Filter number of front page sections in Twenty Seventeen.
			 *
			 * @since Twenty Seventeen 1.0
			 *
			 * @param $num_sections integer
			 */
			$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
			global $twentyseventeencounter;

			// Create a setting and control for each of the sections available in the theme.
			for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
				$twentyseventeencounter = $i;
				twentyseventeen_front_page_section( null, $i );
			}

	endif; // The if ( 0 !== twentyseventeen_panel_count() ) ends here. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();