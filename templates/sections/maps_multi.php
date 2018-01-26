<?php use Roots\Sage\Assets; ?>
<section class="maps bg-gray">

  <div class="<?php the_sub_field('mode'); ?> <?= (get_sub_field('title'))?'pt-4':'';?>">

    <?php get_template_part('templates/sections/parts/title'); ?>

    <?php if( have_rows('items') ): ?>

      <div class="row align-items-top">

        <div class="col-12 col-lg p-0">
          <div class="acf-map">

            <?php  while( have_rows('items') ) : the_row(); ?>

              <?php get_template_part('templates/sections/parts/maps','item'); ?>

            <?php endwhile; ?>

          </div>
        </div>

        <?php if( get_sub_field('style') !== 'none' ): ?>

          <div class="col-12 col-lg-5 pt-3 text-black">

            <div class="d-lg-inline-block bg-white py-3 pl-3">
              <ol class="p-0 pr-lg-5">

                <?php $i = 0;?>

                <?php  while( have_rows('items') ) : the_row(); $i++; ?>

                  <?php include(locate_template('templates/sections/parts/maps-list-item.php')); ?>

                <?php endwhile; ?>

              </ol>
              <div>
                <strong>DEALERS ADIDAS PADEL NEDERLAND<br>OP DEZE PUNTEN KUNT UW ADIDAS PADEL<br>PRODUCTEN VERKRIJGEN.</strong>
              </div>
            </div>
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
      img[src="<?= Assets\asset_path('images/marker.png'); ?>"] {
        background-color: black;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=<?= acf_get_setting('google_api_key'); ?>"></script>
    <script type="text/javascript">
      (function($) {

        function new_map( $el ) {

          var $markers = $el.find('.marker');

          var map_style=new google.maps.StyledMapType([{"elementType":"geometry","stylers":[{"color":"#f5f5f5"}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#616161"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#f5f5f5"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text.fill","stylers":[{"color":"#bdbdbd"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#eeeeee"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#757575"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#e5e5e5"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"color":"#757575"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#dadada"}]},{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"color":"#616161"}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"color":"#e5e5e5"}]},{"featureType":"transit.station","elementType":"geometry","stylers":[{"color":"#eeeeee"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#c9c9c9"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]}],{name:'Styled Map'});

          var args = {
            zoom: <?= the_sub_field('zoom'); ?>,
            center: new google.maps.LatLng(0, 0),
            optimized: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControlOptions: {
            mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                    'styled_map']
          }
          };

          var map = new google.maps.Map( $el[0], args);

          map.mapTypes.set('styled_map', map_style);
          map.setMapTypeId('styled_map');


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
            map: map,
            icon: '<?= Assets\asset_path('images/marker.png'); ?>',
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
