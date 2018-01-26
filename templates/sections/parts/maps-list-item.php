<?php $location = get_sub_field('location'); ?>

<li class=" p-0">

  <div>
    <small><?= $i; ?> - <?php the_sub_field('title'); ?> - <?= $location['address']; ?></small>
  </div>

  <div>
    <small><?php the_sub_field('description'); ?></small>
  </div>

</li>
