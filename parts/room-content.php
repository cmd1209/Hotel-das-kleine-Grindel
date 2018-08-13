<?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
<div class="keyvisual" style="background:url(<?php echo $featuredImage; ?>)no-repeat center center;">
</div>

<div class="dflex">
  <div class="block">
    <div class="flexbox">
      <div class="content">
      <?php the_content(); ?>
      </div>
    </div>
  </div>

    <?php if (is_page( array( 4,45 ) )): ?>
      <div class="block">
      <div class="flexrow">
      <div class="square squareblank">
          <a href="/index.php?p=4" class="zimmer-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/zimmer1.svg" alt="zimmer1" >
          </a>
        </div>
        <div class="square square5"></div>
      </div>
      <div class="flexrow">
        <div class="square square6"></div>
        <div class="square square7"></div>
      </div>
      <div class="flexrow">
        <div class="square square8"></div>
        <div class="square square19"></div>
      </div>
      </div>

    <?php elseif (is_page( array(6,47,245 ) )): ?>
      <div class="block">
      <div class="flexrow">
        <div class="square squareblank">
          <a href="/index.php?p=6" class="zimmer-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/zimmer2.svg" alt="zimmer2" >
          </a>
        </div>
        <div class="square square9"></div>
      </div>
      <div class="flexrow">
        <div class="square square11"></div>
        <div class="square square12"></div>
      </div>
      <div class="flexrow">
        <div class="square square13"></div>
        <div class="square square17"></div>
      </div>
    </div>
    <?php else: ?>
    <?php endif; ?>
</div>