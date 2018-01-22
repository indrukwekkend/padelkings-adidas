<?php $location = get_sub_field('location'); ?>

<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">

  <?= ( get_sub_field('title') )? "<h5>".get_sub_field('title')."</h5>":''; ?>

  <?= ( get_sub_field('description') )? "<p>".get_sub_field('description')."</p>":''; ?>

</div>
