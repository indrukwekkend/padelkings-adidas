<section id="<?php the_sub_field('id'); ?>" class="visual pt-5">
  <div class="d-block d-sm-none container">
    <div class="row">
      <div class="col-12 p-0">
        <img class="card-img mb-3" src="<?php the_sub_field('image'); ?>" alt="Card image">
        <div class="px-4">
          <?php the_sub_field('content'); ?>
        </div>
      </div>
    </div>
  </div>


  <div class="card border-0 d-none d-sm-flex">
    <img class="card-img" src="<?php the_sub_field('image'); ?>" alt="Card image">
    <div class="card-img-overlay container d-flex">
      <div class="d-flex align-self-stretch w-100">
        <div class="align-self-center w-100">
          <?php the_sub_field('content'); ?>
        </div>
      </div>
    </div>
  </div>
</section>
