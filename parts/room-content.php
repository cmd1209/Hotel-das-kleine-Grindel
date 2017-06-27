<div class="content-block">
  <div class="content-holder">
    <div class="row padded">
      <div class="col col--8-of-12 col--m-1-of-2 col--s-1-of-2">
        <?php if (is_page( array( 4,45 ) )): ?>
          <img src="<?php echo get_template_directory_uri(); ?>/img/zimmer1.svg" alt="zimmer1" class="zimmer">
				<?php elseif (is_page( array(6,47 ) )): ?>
          <img src="<?php echo get_template_directory_uri(); ?>/img/zimmer2.svg" alt="zimmer2" class="zimmer">
				<?php else: ?>
				<?php endif; ?>
      </div>
      <div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2">
        <?php if (is_page(array(4, 45) )): ?>
          <h4 class="room-size room1color">
        <?php elseif (is_page(array(6, 47) )): ?>
          <h4 class="room-size room2color">
        <?php else: ?>
          <h4 class="room-size ">
        <?php endif; ?>
          <?php if ( get_post_meta($post->ID, 'QM', true) ) : ?>
                  <?php echo get_post_meta($post->ID, 'QM', true) ?>
          <?php endif; ?>
        </h4>
        <ul class="features">
        <li>Double Bed</li>
        <li>Terrasse</li>
        <li>Free WLAN</li>
        </ul>
        <?php if (is_page(array(4, 45) )): ?>
          <h4 class="room-size room1color">
        <?php elseif (is_page(array(6, 47) )): ?>
          <h4 class="room-size room2color">
        <?php else: ?>
          <h4 class="room-size ">
        <?php endif; ?>
          <?php if ( get_post_meta($post->ID, 'Preis', true) ) : ?>
                  <?php echo get_post_meta($post->ID, 'Preis', true) ?>
          <?php endif; ?>
        </h4>
      </div>
    </div>
    <div class="row">
      <div class="col col--12-of-12">
        <?php if (is_page( array(4, 45) )): ?>
          <div class="padded room1color">
        <?php elseif (is_page(array(6, 47) )): ?>
          <div class="padded room2color">
        <?php else: ?>
          <div class="padded">
        <?php endif; ?>
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
