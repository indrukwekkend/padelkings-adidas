<?php use Roots\Sage\Functions\Video_API; ?>

<div class="embed-responsive <?= get_sub_field('ratio'); ?>">
  <iframe class="embed-responsive-item" src="<?= Video_API\get_video_embed_url( get_sub_field('url') ); ?>"></iframe>
</div>
