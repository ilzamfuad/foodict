<div class="ui divider"></div>
  <div class="ui grid">
    <div class="one wide column" id="side">
      <div class="ui secondary vertical fluid menu"></div>
    </div>
    <div class="fourteen wide column">
      <h2 style="margin-left: 30px;">Detail Article</h2>
      <div class="ui container" style="margin-bottom: 21px;">

        <?php
          include('config/db.php');
            
          if(isset($_GET["id"])){
            $id = $_GET['id'];
            
            $query = mysqli_query($connection,"select judul, berita, url from text where id = ".$id);
            if (mysqli_num_rows($query) > 0) {
                while ($data = mysqli_fetch_assoc($query)){
                
                    echo '<div class="ui card" style="width: 100%;">
                        <div class="content">
                        <h2 class="header">'.$data['judul'].'</h2>
                        <div class="meta">'.$data['url'].'</div>
                        <div class="description">
                            <p>'.$data['berita'].'</p>
                        </div>
                        </div>
                        <div class="ui divider"></div>
                        <div class="description">
                            <p>Lihat Selengkapnya : <a href="'.$data['url'].'">Disini</a></p>
                        </div>
                    </div>';
                }
            }else{
                echo "<h4>Tidak Ada Detail yang Dilihat</h4>";
            }
               
          }else{
            echo "<h4>Tidak Ada Detail yang Dilihat</h4>";
          }

          ?>
        
      </div>
    </div>
  </div>

