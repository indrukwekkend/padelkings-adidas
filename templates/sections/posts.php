
<?php
$lead = get_sub_field('lead');
$taxonomy = get_sub_field('taxonomy');
$aantal = get_sub_field('amount');

$args = array(
  'posts_per_page' =>  $aantal,
  'tax_query' => array(
    'relation' => 'AND',
      array(
        'taxonomy' => 'category',
        'field' => 'id',
        'terms' => array( $taxonomy )
      )
    )
  );

$the_query = new WP_Query( $args );
?>


<section class="posts">

  <div class="row">

    <div class="col-12 py-4 text-center">

      <h1 class="display-4">
        <?php the_sub_field('title'); ?>
      </h1>

      <p class="lead">
        <?php the_sub_field('lead'); ?>
      </p>

    </div>

  </div>

  <div class="row">

    <?php if ( $the_query->have_posts() ): ?>

      <?php while ( $the_query->have_posts() ): ?>

        <?php $the_query->the_post(); ?>

          <div class="card-deck col-12 col-md-6 col-lg">

            <div class="card mb-4">

              <div class="card-body">

                <h4 class="card-title">
                  <?php the_title(); ?>
                </h4>

                <p class="card-text text-muted">
                  <small><?= get_the_date( get_option( 'date_format' ) );?></small>
                </p>

                <div class="card-text">
                  <?php the_excerpt(); ?>
                </div>

              </div>

              <div class="card-footer">
                <a href="<?= get_post_permalink(); ?>" class="card-link">Lees verder</a>
              </div>

            </div>

          </div>

        <?php endwhile;?>

      <?php wp_reset_postdata(); ?>

    <?php endif;?>

  </div>

</section>
