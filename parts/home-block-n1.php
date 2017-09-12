<?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
<div class="owl-carousel owl-theme">
  <div class="keyvisual" style="background:url(<?php echo $featuredImage; ?>)no-repeat center center;">
      <div class="welcomecontainer">
        <img src="http://das-kleine-grindel.com/wp-content/uploads/2017/08/Welcome.jpg" alt="welcome" class="welcomeimg" width="360px" height="auto">
      </div>
  </div>
  <div class="keyvisual" style="background:url(<?php echo $featuredImage; ?>)no-repeat center center;">
  </div>
  <div class="keyvisual" style="background:url(http://das-kleine-grindel.com/wp-content/uploads/2017/09/grindel_nr2.jpg)no-repeat center center;"></div>
  <div class="keyvisual" style="background:url(http://das-kleine-grindel.com/wp-content/uploads/2017/08/Grindelhof_LoRes-01.jpg)no-repeat center center;"></div>
  <div class="keyvisual" style="background:url(http://das-kleine-grindel.com/wp-content/uploads/2017/08/Grindelhof_LoRes-05.jpg)no-repeat center center;"></div>
  <div class="keyvisual" style="background:url(http://das-kleine-grindel.com/wp-content/uploads/2017/08/Grindelhof_LoRes-02.jpg)no-repeat center center;"></div>
  <div class="keyvisual" style="background:url(http://das-kleine-grindel.com/wp-content/uploads/2017/08/Grindelhof_LoRes-03.jpg)no-repeat center center;"></div>
  <div class="keyvisual" style="background:url(http://das-kleine-grindel.com/wp-content/uploads/2017/08/Grindelhof_LoRes-06.jpg)no-repeat center center;"></div>
</div>
<div class="dflex dflexintro">
  <div class="introtext">
    <?php the_content(); ?>
  </div>
</div>
<div class="dflex">
  <div class="block">
    <div class="flexrow">
      <div class="square square4"></div>
      <div class="square square24"></div>
    </div>
    <div class="flexrow">
      <div class="square square6"></div>
      <div class="square square7"></div>
    </div>
    <div class="flexrow">
      <div class="square square25"></div>
      <div class="square square19"></div>
    </div>
  </div>
  <div class="block">
    <div class="flexrow">
      <div class="square square16"></div>
      <div class="square square15"></div>
    </div>
    <div class="flexrow">
      <div class="square square20"></div>
      <div class="square square21"></div>
    </div>
    <div class="flexrow">
      <div class="square square22"></div>
      <div class="square square5"></div>
    </div>
  </div>
</div>
