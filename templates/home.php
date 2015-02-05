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

<!-- START OF HOME SECTION -->
<div id="home">
	<div class="fixed_bg_home" style="background-image: url(<?php the_field('home_bg_image'); ?>);">
	<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 center">
			<h1><?php the_field('home_header'); ?></h1>
      <a href="tel:800-622-1444" class="button_flat">Call Now</a>
		  <div class="row">
      <div class="col-xs-12 col-sm-6 col-sm-offset-3">
        <p><?php the_field('home_text'); ?></p>
      </div>
      </div>
    </div>
	</div>
	</div>
	</div>
</div>

<!-- END OF HOME SECTION -->
<!-- START OF SCROLLING BREAK SECTION -->
<div class="flat_bg">
  <div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2">
      <div class="center">
        <h2><?php the_field('home_subheader_1'); ?></h2>
      </div>
    </div>
  </div>
  <hr>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-sm-offset-3">
        <p><?php the_field('home_subtext_1'); ?></p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-sm-offset-3">
        <p><?php the_field('home_subtext_2'); ?></p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-sm-offset-3">
        <p><?php the_field('home_subtext_3'); ?></p> 
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 center">
        <a href="tel:800-622-1444" class="button_flat">Call Now</a>
      </div>
    </div>
  </div>
</div>
<!-- END OF SCROLLING BREAK SECTION -->

<div class="blog_area">
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 center">
      <h2><?php the_field('blog_header'); ?></h2>
      <p><?php the_field('blog_subheader'); ?></p>
    </div>
  </div>
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
  <div class="custom_column_third">
  <a href="<?php echo get_permalink(); ?>">
  <div class="travel_blog_post" style="background-image: url(<?php the_field('small_display_image'); ?>);">
    <div class="black_background_top">
      <h4><?php the_title(); ?></h4>
      <p><?php travel_posted_on(); ?></p>
    </div>
    <div class="black_background bottom">
      <p><?php the_field('small_display_teaser'); ?></p>
    </div>
  </div>
  </a>
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
