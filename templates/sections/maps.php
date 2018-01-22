<section class="maps">

  <div class="container-fluid <?= (get_sub_field('title'))?'pt-4':'';?>">

    <?php get_template_part('templates/sections/parts/title'); ?>

    <?php if( $location = get_sub_field('location') ): ?>

      <div class="row">
        <div class="col-12 p-0">
          <div class="acf-map">
            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"><?= ( get_sub_field('description') )? "<p>".the_sub_field('description')."</p>":''; ?></div>
          </div>
        </div>
      </div>

    <?php endif; ?>

    <style type="text/css">.acf-map{width: 100%;height:<?php the_sub_field('height'); ?>px;}.acf-map img {max-width: inherit !important;}</style>
    <script src="https://maps.googleapis.com/maps/api/js?key=<?= acf_get_setting('google_api_key'); ?>"></script>
    <script type="text/javascript">!function(n){function e(e){var t=e.find(".marker"),r={center:new google.maps.LatLng(0,0),mapTypeId:google.maps.MapTypeId.ROADMAP},g=new google.maps.Map(e[0],r);return g.markers=[],t.each(function(){a(n(this),g)}),o(g),g}function a(n,e){var a=new google.maps.LatLng(n.attr("data-lat"),n.attr("data-lng")),o=new google.maps.Marker({position:a,map:e});if(e.markers.push(o),n.html()){var t=new google.maps.InfoWindow({content:n.html()});google.maps.event.addListener(o,"click",function(){t.open(e,o)})}}function o(e){var a=new google.maps.LatLngBounds;n.each(e.markers,function(n,e){var o=new google.maps.LatLng(e.position.lat(),e.position.lng());a.extend(o)}),1==e.markers.length?(e.setCenter(a.getCenter()),e.setZoom(<?= the_sub_field('zoom'); ?>)):e.fitBounds(a)}var t=null;n(document).ready(function(){n(".acf-map").each(function(){t=e(n(this))})})}(jQuery);</script>

  </div>
</section>
