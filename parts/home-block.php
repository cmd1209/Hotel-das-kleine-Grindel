<div class="content-block">
  <div class="content-holder">
    <div class="row room1">
      <div class="col col--4-of-12 col-left col--m-1-of-3 col--s-1-of-2">
        <a href="/index.php?p=4" class="zimmer-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/zimmer1.svg" alt="zimmer1" class="zimmer">
        </a>
      </div>
      <div class="col col--4-of-12 col-center col--m-1-of-3 col--s-1-of-2">
        <!-- <p class="beschreibung">
          <?php $meta = get_post_meta( 4, 'Beschreibung' );
          if( !empty($meta) ) { echo $meta[0]; } ?>
        </p> -->
        <h4 class="room-size room1color">
          <?php $meta = get_post_meta( 4, 'QM' );
          if( !empty($meta) ) { echo $meta[0]; } ?>
        </h4>
        <ul class="features">
        <li>Double Bed</li>
        <li>Terrasse</li>
        <li>Free WLAN</li>
        </ul>
        <h4 class="room-price room1color">
          <?php $meta = get_post_meta( 4, 'Preis' );
          if( !empty($meta) ) { echo $meta[0]; } ?>
        </h4>

          </div>
      <div class="col col--4-of-12 col-right col--m-1-of-3 col--s-1-of-1">
        <a href="http://das-kleine-grindel.com/de/zimmer-1" class="zimmer-link" style="background: url(http://das-kleine-grindel.com/wp-content/uploads/2017/08/Grindelhof_LoRes-01.jpg)no-repeat center center;"></a>
      </div>
    </div>
    </div>

    <div class="content-holder">
    <div class="row room2">
      <div class="col col--4-of-12 col-left col--m-1-of-3 col--s-1-of-1">
        <a href="http://das-kleine-grindel.com/de/zimmer-2" class="zimmer-link" style="background: url(http://das-kleine-grindel.com/wp-content/uploads/2017/08/Grindelhof_LoRes-09.jpg)no-repeat center center;"></a>
      </div>
      <div class="col col--4-of-12 col-center col--m-1-of-3 col--s-1-of-2">
        <!-- <p class="beschreibung">
          <?php $meta = get_post_meta( 6, 'Beschreibung' );
          if( !empty($meta) ) { echo $meta[0]; } ?>
        </p> -->
        <h4 class="room-size room2color">
          <?php $meta = get_post_meta( 6, 'QM' );
          if( !empty($meta) ) { echo $meta[0]; } ?>
        </h4>
        <ul class="features">
        <li>Double Bed</li>
        <li>Terrasse</li>
        <li>Free WLAN</li>
        </ul>
        <h4 class="room-price room2color">
          <?php $meta = get_post_meta( 6, 'Preis' );
          if( !empty($meta) ) { echo $meta[0]; } ?>
        </h4>
      </div>
      <div class="col col--4-of-12 col-right col--m-1-of-3 col--s-1-of-2">
        <a href="/index.php?p=6" class="zimmer-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/zimmer2.svg" alt="zimmer2" >
        </a>
      </div>
    </div>
  </div>
  <div class="block-holder">
    <div class="row">
      <div class="col col--4-of-12 col--m-1-of-3 col--s-1-of-3">
        <a href="http://das-kleine-grindel.com/de/zimmer-1" class="square square1"></a>
      </div>
      <div class="col col--4-of-12 col--m-1-of-3 col--s-1-of-3">
        <a href="http://das-kleine-grindel.com/de/zimmer-2" class="square square2"></a>
      </div>
      <div class="col col--4-of-12 col--m-1-of-3 col--s-1-of-3">
        <a href="http://das-kleine-grindel.com/de/zimmer-1" class="square square3"></a>
      </div>
    </div>
    <div class="row">
      <div class="col col--4-of-12 col--m-1-of-3 col--s-1-of-3">
        <a href="http://das-kleine-grindel.com/de/zimmer-2" class="square square4"></a>
      </div>
      <div class="col col--4-of-12 col--m-1-of-3 col--s-1-of-3">
        <a href="http://das-kleine-grindel.com/de/zimmer-1" class="square square5"></a>
      </div>
      <div class="col col--4-of-12 col--m-1-of-3 col--s-1-of-3">
        <a href="http://das-kleine-grindel.com/de/zimmer-2" class="square square6"></a>
      </div>
    </div>
    <div class="row">
      <div class="col col--4-of-12 col--m-1-of-3 col--s-1-of-3">
        <a href="http://das-kleine-grindel.com/de/zimmer-1" class="square square7"></a>
      </div>
      <div class="col col--4-of-12 col--m-1-of-3 col--s-1-of-3">
        <a href="http://das-kleine-grindel.com/de/zimmer-2" class="square square8"></a>
      </div>
      <div class="col col--4-of-12 col--m-1-of-3 col--s-1-of-3">
        <a href="http://das-kleine-grindel.com/de/zimmer-1" class="square square9"></a>
      </div>
    </div>
  </div>
</div>
