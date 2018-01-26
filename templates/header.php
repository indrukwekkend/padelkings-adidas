<?php use Roots\Sage\Assets; ?>
<header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-header">
		<div class="container">

			<a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
				<img class="brand" height="50" src="<?php echo Assets\asset_path('images/logo.png'); ?>" alt="<?php bloginfo('name'); ?>" />
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primary_navigation" aria-controls="primary_navigation" aria-expanded="false" aria-label="<?php _e('Wissel navigatie', 'sage');?>">
				<span class="navbar-toggler-icon"></span>
			</button>

      <div id="primary_navigation" class="collapse navbar-collapse">


        <?php
            wp_nav_menu(
                array(
                    'menu'              => 'primary_navigation',
                    'theme_location'    => 'primary_navigation',
                    'depth'             => 2,
                    'container'         => '',
                    'container_class'   => '',
                    'container_id'      => '',
                    'menu_class'        => 'nav navbar-nav ml-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker()
                )
            );
          ?>

          <span class="navbar-text">
            <?php get_template_part('templates/sections/parts/navbar','social'); ?>
          </span>

        </div>

			</div>
		</div>
	</nav>
</header>

<?php if( is_front_page() or is_page_template('template-landingspage.php') ) : ?>

  <?php get_template_part('templates/sections/carousel'); ?>

<?php endif;?>
