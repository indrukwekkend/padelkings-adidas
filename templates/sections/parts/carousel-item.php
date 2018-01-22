<?php $image = get_sub_field('image'); ?>
<?php $size = 'jumbotron'; ?>
<?php $thumb = $image['sizes'][ $size ]; ?>
<?php $title = $image['title']; ?>
<?php $alt = $image['alt']; ?>

<img class="d-block w-100" src="<?= $thumb; ?>" title="<?= $title; ?>" alt="<?= $alt; ?>">

<?php $content = get_sub_field('content'); ?>

<?php if( $content['title'] or $content['lead'] or $content['cta']): ?>

	<div class="carousel-caption d-none d-md-block">

		<?php if( $content['title'] ): ?>

			<h1 class="display-3 text-white text-shadow">
				<?= $content['title']; ?>
			</h1>

		<?php endif; ?>

		<?php if( $content['lead'] ): ?>

			<div class="lead text-white text-shadow">
				<?= $content['lead'];?>
			</div>

		<?php endif; ?>

		<?php if( $content['cta'] ): ?>

			<div>
				<?php foreach($content["cta"] as $cta ) :?>

					<?php $color = ($cta['color']) ? "btn-" . $cta['color'] : "btn-primary"; ?>

					<a href="<?= $cta['url']; ?>" class="btn <?= $color; ?>"><?= $cta['label'] ?></a>

				<?php endforeach; ?>
			</div>

		<?php endif; ?>

	</div>

<?php endif; ?>
