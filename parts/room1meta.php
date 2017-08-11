<h4 class="room-size room1color">
  <?php $meta = get_post_meta( 45, 'QM' );
  if( !empty($meta) ) { echo $meta[0]; } ?>
</h4>
<ul class="features">
<li>Double Bed</li>
<li>Terrasse</li>
<li>Free WLAN</li>
</ul>
<h4 class="room-price room1color">
  <?php $meta = get_post_meta( 45, 'Preis' );
  if( !empty($meta) ) { echo $meta[0]; } ?>
</h4>
