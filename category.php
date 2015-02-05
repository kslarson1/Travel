<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Travel
 */

get_header(); ?>
<div id="categories">
<div class="container">
<div class="row">
	<div class="col-xs-12 col-md-8">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<p class="page-title "><b>', '</b></p>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>


				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	</div>
	<div class="col-xs-12 col-md-4">
		<?php get_sidebar(); ?>
	</div>
</div>
<div class="row">
<div class="col-xs-12 col-md-8">
<div class="single_nav"><p><?php previous_posts_link(); ?>hello NEED TO UPdate category.php</p></div>
</div>
</div>
</div> <!-- END OF Container -->
</div> <!-- END OF CATEGORIES -->
<?php get_footer(); ?>

