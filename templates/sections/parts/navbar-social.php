<?php if( have_rows('general_social_items', 'option') ): ?>

  <ul class="nav">

    <?php while ( have_rows('general_social_items', 'option') ) : the_row(); ?>

      <li class="nav-item">

        <a class="nav-link" href="<?php the_sub_field('url'); ?>" target="_blank" title="<?php the_sub_field('username'); ?>">

          <span class="fa fa-<?php the_sub_field('service'); ?>"></span>

        </a>

      </li>

    <?php endwhile; ?>

  </ul>

<?php endif; ?>
