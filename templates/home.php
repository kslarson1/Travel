<?php
/**
 * Template Name: Home
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

				<?php get_template_part( 'content', 'page' ); ?>

<!-- START OF HOME SECTION -->
<div id="home">
	<div class="fixed_bg_home" style="background-image: url(<?php the_field('home_bg_image'); ?>);">
	<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 center">
			<h1>sample text</h1>
		</div>
	</div>
	</div>
	</div>
</div>

<!-- END OF HOME SECTION -->
<!-- START OF SCROLLING BREAK SECTION -->
<div class="flat_bg">
  <div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 center">
      <h2><?php the_field('home_subheader_1'); ?></h2>
      <hr>
      <p><?php the_field('home_subtext_1'); ?></p>
      <a href="#" class="button_flat">1-800</a>
    </div>
  </div>
  </div>
</div>
<!-- END OF SCROLLING BREAK SECTION -->

<div class="blog_area">
<div class="container">
  <div class="row">
<!-- START OF CUSTOM POST FOR BLOG -->
<!-- // The Arguments -->
<?php $args = array( 
			 'post_type' => 'travel_posts', 
			 'posts_per_page' => 3
			 );

// <!-- START LOOP -->
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>

  <!-- LOOP CONTENT BEGINS-->
  <div class="col-xs-12 col-sm-4">
    <?php the_title();
    echo '<div class="entry-content">';
    the_content();
    echo '</div>'; ?>
  </div>

<?php endwhile; ?>
<!-- END OF CUSTOM POST FOR BLOG -->
<!-- END OF BLOG AREA -->
  </div>  <!-- END OF ROW -->
</div> <!-- END OF CONTAINER -->
</div>  <!-- END OF blog_area -->

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
