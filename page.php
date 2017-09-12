<?php get_header(); ?>
	<main role="main">
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


				<?php if (is_page(array( 8,43 )) ): ?>
					<!-- put back in when room number 2 is finaly ready.  simply take out the -n1 after home-block-->
					<?php include 'parts/home-block-n1.php'; ?>
				<?php elseif (is_page( array( 4,6,45,47 ) )  ): ?>
					<?php include 'parts/room-content.php'; ?>
				<?php elseif (is_page( array( 107,109) )  ): ?>
					<?php include 'parts/anreise-content.php'; ?>
				<?php elseif (is_page( array( 22,53) )  ): ?>
					<?php include 'parts/endecken-content.php'; ?>
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
