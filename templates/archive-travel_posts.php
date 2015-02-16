<?php
/**
 * Template Name: Archive
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Travel
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

<div id="archive">
<div class="container">
<div class="row">
	<div class="col-xs-12 col-md-8">
		<?php
		$args = array(
			'post_type' => 'travel_posts',
			'posts_per_page' => 2,
			'orderby'=> 'date',
			'paged'=>$paged
			);

$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>
  	<h2 class="post_header"><?php the_title(); ?></h2>
  	<p><?php the_date(); ?></p>
  <?php echo '<div class="entry-content">';
  the_content(); ?>
	<br>
	<br>
	<br>
	<br>
  <?php echo '</div>';
endwhile; ?>

	</div>  <!-- END OF BLOG COL-XS-12 -->
	<div class="col-xs-12 col-md-4">
		<?php get_sidebar(); ?>
	</div>
</div>
</div>
</div>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
