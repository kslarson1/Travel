<?php
/**
 * @package Travel
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php get_header(); ?>

<header class="entry-header">

  <div class="entry-meta">
    <?php travel_posted_on(); ?>
  </div><!-- .entry-meta -->
</header><!-- .entry-header -->

	<div class="entry-content">

		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'travel' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
