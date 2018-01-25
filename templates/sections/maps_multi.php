<section class="maps bg-gray">

  <div class="<?php the_sub_field('mode'); ?> <?= (get_sub_field('title'))?'pt-4':'';?>">

    <?php get_template_part('templates/sections/parts/title'); ?>

    <?php if( have_rows('items') ): ?>

      <div class="row align-items-top">

        <div class="col p-0">
          <div class="acf-map">

            <?php  while( have_rows('items') ) : the_row(); ?>

              <?php get_template_part('templates/sections/parts/maps','item'); ?>

            <?php endwhile; ?>

          </div>
        </div>

        <?php if( get_sub_field('style') !== 'none' ): ?>

          <div class="col-5 pt-3 text-black">
            <ul class="list-group list-group-flush">

              <?php  while( have_rows('items') ) : the_row(); ?>

                <?php get_template_part('templates/sections/parts/maps','list-item'); ?>

              <?php endwhile; ?>

            </ul>
          </div>

        <?php endif; ?>

      </div>

    <?php endif; ?>

    <style type="text/css">
      .acf-map{
        width: 100%;
        height:<?php the_sub_field('height'); ?>px;
      }
      /* fixes potential theme css conflict */
      .acf-map img {
        max-width: inherit !important;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=<?= acf_get_setting('google_api_key'); ?>"></script>
    <script type="text/javascript">
      (function($) {

        function new_map( $el ) {

          var $markers = $el.find('.marker');

          var args = {
            zoom: <?= the_sub_field('zoom'); ?>,
            center: new google.maps.LatLng(0, 0),
            mapTypeId: google.maps.MapTypeId.ROADMAP
          };

          var map = new google.maps.Map( $el[0], args);

          map.markers = [];

          $markers.each(function(){

            add_marker( $(this), map );

          });

          center_map( map );

          return map;

        }

        function add_marker( $marker, map ) {

          var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

          var marker = new google.maps.Marker({
            position: latlng,
            map: map
          });

          map.markers.push( marker );

          if( $marker.html() ) {

            var infowindow = new google.maps.InfoWindow({
              content: $marker.html()
            });

            google.maps.event.addListener(marker, 'click', function() {

              infowindow.open( map, marker );

            });
          }
        }

        function center_map( map ) {

          var bounds = new google.maps.LatLngBounds();

          $.each( map.markers, function( i, marker ){

            var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

            bounds.extend( latlng );

          });

          if( map.markers.length == 1 ) {

            map.setCenter( bounds.getCenter() );
            map.setZoom( <?= the_sub_field('zoom'); ?> );
          }else{

            map.fitBounds( bounds );

          }
        }

        var map = null;

        $(document).ready(function(){

          $('.acf-map').each(function(){

            map = new_map( $(this) );

          });

        });

      })(jQuery);

    </script>

  </div>

</section>
