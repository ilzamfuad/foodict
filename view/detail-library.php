<div class="ui grid">
    <div class="three wide column" id="side">
      <img src="public/images/logo-sementara.png">
      <?php 
      
      $perpus = $_GET['perpus'];
      ?>
      
    </div>
    <div class="twelve wide column">
    <?php 

      include('config/db.php');

       if(empty($_GET['perpus'])){
         $_GET['perpus'] = "";
        }
        
       $query = mysql_query("select * from perpus WHERE id_perpus = '$perpus'", $connection);

        while($data = mysql_fetch_assoc($query)){
          echo '<h1 class="ui header">'.$data['nama_perpus'].'</h1>
       
          <h3 class="ui header">Alamat</h3>';
          
          
            echo '<div class="sub header">'.$data['alamat_perpus'].'</div>';

           echo '<h3 class="ui header">Deskripsi</h3>';
          
            echo '<div class="sub header">'.$data['deskripsi_perpus'].'</div>';

            $lat = $data['latitude'];
            $long = $data['longitude'];

        }
    ?>
    
    </div>
    <div id="map-container">
    <h3 class="ui header">Location</h3>
    <div id="map" style="width:100%;height:400px;"></div>
    </div>
    <script>

      function initMap() {

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: new google.maps.LatLng(<?php echo $lat.','.$long; ?>),
        });

        var marker = new google.maps.Marker({
          position: new google.maps.LatLng(<?php echo $lat.','.$long; ?>),
          map: map,
          title: 'Hello World!'
        });
    }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtM1edC1-5vmP1FNZulvvLjr71wuWkrrU&callback=initMap">
    </script>
</div>