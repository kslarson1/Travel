<?php
/**
 * The template for displaying all travel_posts posts.
 *
 * @package Travel
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

<!-- START OF TRAVEL POST -->
<div class="travel_post">			
  <div class="container">	
    <div class="row">
      <div class="col-xs-12 col-md-8">
      <div class="post_header">
        <h1><?php the_title(); ?></h1>
      </div>
        <?php get_template_part( 'content', 'single_travel_posts' ); ?>
      </div>
      <div class="col-xs-12 col-md-4">
        <?php get_sidebar($travel_posts); ?>
      </div>
    </div>
    <div class="row">
    <div class="col-xs-12 col-md-8">
    <div class="single_nav">
      <p style="float: left"><?php previous_post_link(); ?></p><p style="float: right"><?php next_post_link(); ?></p>
    </div>
    </div>
    </div>
  </div>
</div>
<!-- END OF TRAVEL POST -->

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
