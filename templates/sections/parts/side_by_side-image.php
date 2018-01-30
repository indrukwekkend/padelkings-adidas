<?php use Roots\Sage\Functions\Image_API; ?>

<?php echo (get_sub_field('url'))?'<a href="'.get_sub_field('url').'" target="_blank">':'';?>
<?php echo Image_API\get_image_tag( get_sub_field('image'), 'medium', 'img-fluid d-none d-md-inline-block'); ?>

<?php echo Image_API\get_image_tag( get_sub_field('image'), 'large', 'img-fluid d-inline-block d-md-none w-75 mt-3'); ?>
<?php echo (get_sub_field('url'))?'</a>':'';?>
