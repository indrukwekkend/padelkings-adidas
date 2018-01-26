<?php use Roots\Sage\Functions\Image_API; ?>

<?= Image_API\get_image_tag( get_sub_field('image'), 'full', 'd-block w-100'); ?>

<?php $content = get_sub_field('item'); ?>

<?php if( $content['title'] or $content['lead'] or $content['cta']): ?>

  <div class="carousel-caption d-none d-md-block">
    <div class="row">
      <div class="col-8">

        <?php if( $content['title'] ): ?>

          <div class="carousel-title ">
            <?= $content['title']; ?>
          </div>

        <?php endif; ?>

        <?php if( $content['lead'] ): ?>

          <div class="carousel-lead">
            <?= $content['lead'];?>
          </div>

        <?php endif; ?>

        <?php if( $content['cta-item'] ): ?>

          <div class="carousel-cta">
            <?php foreach($content["cta-item"] as $cta ) :?>

              <a href="<?= $cta['url']; ?>" class="btn <?= $cta['color']; ?>"><?= $cta['label'] ?></a>

            <?php endforeach; ?>
          </div>

        <?php endif; ?>

      </div>
    </div>
  </div>

<?php endif; ?>
