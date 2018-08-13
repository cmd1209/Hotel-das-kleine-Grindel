<?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
<div class="keyvisual" style="background:url(<?php echo $featuredImage; ?>)no-repeat center center;"></div>


<div class="dflex">
  <div class="block">
    <div class="flexrow">
      <div class="content">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
  <div class="block">
    <div class="flexrow">
      <div class="square square1"></div>
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
</div>
