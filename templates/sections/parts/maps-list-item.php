<?php $location = get_sub_field('location'); ?>

<li class="list-group-item p-2">

  <div>
    <?php the_sub_field('title'); ?>
  </div>

  <div>
    <small class="text-muted"><?= $location['address']; ?></small>
  </div>

  <div>
    <small><?php the_sub_field('description'); ?></small>
  </div>

</li>
