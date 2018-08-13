<?php get_header(); ?>
	<main role="main">
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php if (is_page(array( 8 )) ): ?>
					<?php include 'parts/home-block.php'; ?>
				<?php elseif (is_page(array( 43 )) ): ?>
					<?php include 'parts/home-block-eng.php'; ?>
				<?php elseif (is_page( array( 4,6,245,45, ) )  ): ?>
					<?php include 'parts/room-content.php'; ?>
				<?php elseif (is_page( array( 107,109) )  ): ?>
					<?php include 'parts/anreise-content.php'; ?>
				<?php elseif (is_page( array( 22,53) )  ): ?>
					<?php include 'parts/endecken-content.php'; ?>
				<?php elseif (is_page( array( 117,309) )  ): ?>
					<?php include 'parts/leonar-content.php'; ?>
				<?php elseif (is_page( array( 172) )  ): ?>
					<?php include 'parts/blank-content.php'; ?>
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
