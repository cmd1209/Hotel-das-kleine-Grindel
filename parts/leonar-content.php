<?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
<div class="owl-carousel owl-theme">
  <div class="keyvisual" style="background:url(<?php echo $featuredImage; ?>)no-repeat center center;"></div>
  <div class="keyvisual" style="background:url(https://www.das-kleine-grindel.com/wp-content/uploads/2018/08/Grindelhof59_010.jpg)no-repeat center center;"></div>
  <div class="keyvisual" style="background:url(https://www.das-kleine-grindel.com/wp-content/uploads/2018/08/Grindelhof-59_011.jpg)no-repeat center center;"></div>
</div>

<div class="dflex">
  <div class="block">
    <div class="flexrow">
      <div class="content">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</div>
