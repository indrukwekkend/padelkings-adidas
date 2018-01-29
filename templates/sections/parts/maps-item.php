<?php $location = get_sub_field('location'); ?>

<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">

  <strong class="text-black"><?= $i; ?> - </strong>

  <?= ( get_sub_field('title') )? '<strong class="text-black">'.get_sub_field('title').'</strong>':''; ?>

  <?= ( get_sub_field('description') )? '<p class="text-black">'.get_sub_field('description').'</p>':''; ?>

</div>
