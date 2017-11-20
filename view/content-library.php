<div class="ui divider"></div>
  <div class="ui grid">
    <div class="three wide column" id="side">
      <div class="ui secondary vertical fluid menu"></div>
    </div>
    <div class="twelve wide column">
      <h2>List Perpustakaan</h2>
      <div class="ui container" style="margin-bottom: 21px;">
        <div class="ui three stackable cards">
          <?php
          include('config/db.php');
          $queryperpus = mysql_query("select * from perpus", $connection);

          while ($dataperpus = mysql_fetch_assoc($queryperpus))
            {
            echo '<div class="card">';
            echo '<div class="image"></div>';
            echo '<div class="content">';
            echo '<div class="header">' . $dataperpus['nama_perpus'] . '</div>';
            echo '<div class="description">' . $dataperpus['deskripsi_perpus'] . '</div>';
            echo '</div>';
            echo '<div class="extra content">';
            echo '<span class="right floated">';
            
              echo '<a class="ui inverted red button" href="?p=detail-library&perpus=' . $dataperpus['id_perpus'] . '">Detail</a>';
            
            echo '</span>';
            echo '</div>';
            echo '</div>';
            }

          ?>
        </div>
      </div>
    </div>
  </div>