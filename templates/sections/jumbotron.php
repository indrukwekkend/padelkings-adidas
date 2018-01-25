<?php

$background = function($has_post_thumbnail){

    if($has_post_thumbnail):

        $url = get_the_post_thumbnail_url();

        return 'style="background-image: url('.$url.');min-height:380px;"';

    endif;

    return;
};

// Bedoeling is dat je op elke pagina een Jumbotron kan plaatsen.
$jumbotron = get_field('jumbotron');

?>

<section class="jumbotron jumbotron-fluid m-0 p-0 bg-center">

  <img class="img-fluid" src="<?= get_the_post_thumbnail_url(); ?>"?>

	<?php if( $jumbotron['title'] or $jumbotron['lead'] or $jumbotron['cta']): ?>

    <div class="container">

  		<div class="row py-5">

  			<div class="col-12 py-5">

  				<?php if( $jumbotron['title'] ): ?>

  					<h1 class="jumbotron-heading display-3 text-white">
  						<?= $jumbotron['title']; ?>
  					</h1>

  				<?php endif; ?>

  				<?php if( $jumbotron['lead'] ): ?>

  					<div class="lead text-white">
  						<?= $jumbotron['lead'];?>
  					</div>

  				<?php endif; ?>

  				<?php if( $jumbotron['cta'] ): ?>

  					<div>
  						<?php foreach($jumbotron["cta"] as $cta ) :?>

  							<?php $color = ($cta['color']) ? "btn-" . $cta['color'] : "btn-primary"; ?>

  							<a href="<?= $cta['url']; ?>" class="btn <?= $color; ?>"><?= $cta['label'] ?></a>

  						<?php endforeach; ?>
  					</div>

  				<?php endif; ?>

  			</div>

  		<?php endif; ?>

  	</div>

  </div>

</section>
