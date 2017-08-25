<?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
<div class="owl-carousel owl-theme">
  <div class="keyvisual" style="background:url(<?php echo $featuredImage; ?>)no-repeat center center;">
      <div class="welcomecontainer">
        <img src="http://das-kleine-grindel.com/wp-content/uploads/2017/08/grindel-sp-small.jpg" alt="welcome" class="welcomeimg" width="360px" height="auto">
      </div>
  </div>
</div>


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
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2369.3246694368877!2d9.982028415846857!3d53.56982198002656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b18f39fef34275%3A0x9b4664792f7536e7!2sGrindelhof+59%2C+20146+Hamburg!5e0!3m2!1sen!2sde!4v1503482686146" width="100%" height="800" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</div>
