<?php get_header(); ?>
	<main role="main">
		<!-- section -->
		<section>
<!-- <h1><?php the_title(); ?></h1> -->

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


<!-- <?php the_post_thumbnail(); // Fullsize image for the single post ?> -->


				<?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

				<div class="owl-carousel owl-theme">
					<div class="keyvisual" style="background:url(<?php echo $featuredImage; ?>)no-repeat center center;"></div>
					<div class="keyvisual" style="background:url(http://das-kleine-grindel.com/wp-content/uploads/2017/08/Grindelhof_LoRes-04.jpg)no-repeat center center;"></div>
					<div class="keyvisual" style="background:url(http://das-kleine-grindel.com/wp-content/uploads/2017/08/Grindelhof_LoRes-13.jpg)no-repeat center center;"></div>
					<div class="keyvisual" style="background:url(http://das-kleine-grindel.com/wp-content/uploads/2017/08/Grindelhof_LoRes-09.jpg)no-repeat center center;"></div>
					<div class="keyvisual" style="background:url(http://das-kleine-grindel.com/wp-content/uploads/2017/08/Grindelhof_LoRes-16.jpg)no-repeat center center;"></div>
					<div class="keyvisual" style="background:url(http://das-kleine-grindel.com/wp-content/uploads/2017/08/Grindelhof_LoRes-03.jpg)no-repeat center center;"></div>
				</div>



				<?php if (is_page(8)): ?>
					<?php include 'parts/home-block.php'; ?>
				<?php elseif (is_page(43)): ?>
					<?php include 'parts/home-block-eng.php'; ?>
				<?php elseif (is_page( array( 4,6,45,47 ) )  ): ?>
					<?php include 'parts/room-content.php'; ?>
				<?php else: ?>
					<?php include 'parts/normal-content.php'; ?>
				<?php endif; ?>
			</article>
		<?php endwhile; ?>

		<?php else: ?>
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>

		<?php endif; ?>

		</section>
	</main>
<?php get_footer(); ?>
