<?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

<div class="owl-carousel owl-theme">
  <div class="keyvisual" style="background:url(<?php echo $featuredImage; ?>)no-repeat center center;">
      <div class="welcomecontainer">
        <img src="http://das-kleine-grindel.com/wp-content/uploads/2017/08/Welcome.jpg" alt="welcome" class="welcomeimg" width="360px" height="auto">
      </div>
  </div>
  <div class="keyvisual" style="background:url(http://das-kleine-grindel.com/wp-content/uploads/2017/08/Grindelhof_LoRes-16.jpg)no-repeat center center;"></div>
  <div class="keyvisual" style="background:url(http://das-kleine-grindel.com/wp-content/uploads/2017/08/Grindelhof_LoRes-04.jpg)no-repeat center center;"></div>
  <div class="keyvisual" style="background:url(http://das-kleine-grindel.com/wp-content/uploads/2017/08/Grindelhof_LoRes-13.jpg)no-repeat center center;"></div>
  <div class="keyvisual" style="background:url(http://das-kleine-grindel.com/wp-content/uploads/2017/08/Grindelhof_LoRes-17.jpg)no-repeat center center;"></div>
  <div class="keyvisual" style="background:url(http://das-kleine-grindel.com/wp-content/uploads/2017/08/Grindelhof_LoRes-09.jpg)no-repeat center center;"></div>
  <div class="keyvisual" style="background:url(http://das-kleine-grindel.com/wp-content/uploads/2017/08/Grindelhof_LoRes-22.jpg)no-repeat center center;"></div>
  <div class="keyvisual" style="background:url(http://das-kleine-grindel.com/wp-content/uploads/2017/08/Grindelhof_LoRes-03.jpg)no-repeat center center;"></div>
</div>
<div class="dflex dflexintro">
  <div class="introtext">
    <?php the_content(); ?>
  </div>
</div>
<div class="dflex">
  <div class="block block1 blockpadding">
    <a href="/index.php?p=45" class="clickoverlay clickoverlayroom1"></a>
    <div class="flexrow">
      <div class="square square3"></div>
      <div class="square square5"></div>
    </div>
    <div class="flexrow">
      <div class="square squareblank">
        <a href="/index.php?p=45" class="zimmer-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/zimmer1.svg" alt="zimmer1" >
        </a>
      </div>
      <div class="square square6"></div>
    </div>
    <div class="flexrow">
      <div class="square square7"></div>
      <div class="square square8"></div>
    </div>
    <div class="flexrow">
      <div class="square square19"></div>
      <div class="square square15"></div>
    </div>
  </div>
  <div class="block block2 blockpadding">
    <a href="/index.php?p=47" class="clickoverlay clickoverlayroom2"></a>
    <div class="flexrow">
      <div class="square square1"></div>
      <div class="square square9"></div>
    </div>
    <div class="flexrow">
      <div class="square square11"></div>
      <div class="square square12"></div>
    </div>
    <div class="flexrow">
      <div class="square squareblank">
        <a href="/index.php?p=47" class="zimmer-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/zimmer2.svg" alt="zimmer2" >
        </a>
      </div>
      <div class="square square13"></div>
    </div>
    <div class="flexrow">
      <div class="square square17"></div>
      <div class="square square18"></div>
    </div>
  </div>
</div>
