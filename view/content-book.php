<div class="ui divider"></div>
  <div class="ui grid">
    <div class="three wide column" id="side">
      <div class="ui secondary vertical fluid menu">
      <?php 
                include('config/db.php');
                $query = mysql_query("select * from kategori", $connection);

                while($data = mysql_fetch_assoc($query)){
                  echo  '<a class="item" href="?p=content-book&data='.$data['id_kategori'].'">'.
                    $data['kategori'].
                    '</a>';
                  }
        ?>
        
       
      </div>
    </div>
    <div class="twelve wide column">
    <h2>List Buku</h2>
        <div class="ui container">
                                <div class="ui three stackable cards">
                                <?php 
                                  if(empty($_GET['data'])){
                                    $_GET['data'] = "1";
                                  }

                                  $kategoridata = $_GET['data'];

                                $querybuku = mysql_query("select * from buku WHERE id_kategori='$kategoridata' ORDER BY id_buku DESC", $connection);

                                while($databuku = mysql_fetch_assoc($querybuku)){
                                    echo '<div class="card">';
                                    echo '<div class="image"></div>';
                                    echo '<div class="content">';
                                    echo '<div class="header">'.$databuku['nama_buku'].'</div>';
                                    echo '<div class="description">
                                              '.$databuku['deskripsi_buku'].'
                                            </div>';
                                    echo '</div>';
                                    echo '<div class="extra content">';
                                    echo '<span class="right floated">';
                                     echo '<a class="ui inverted red button" href="?p=detail-book&buku='.$databuku['id_buku'].'">Detail</a>';
                                    echo '</span>';
                                    echo  '</div>';
                                    echo  '</div>';
                                      }
                                ?>

                                </div>
                            </div>
    </div>