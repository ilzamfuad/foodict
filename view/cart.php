<?php include('config/db.php');?>
<div class="ui divider"></div>
  <div class="ui grid">
    <div class="three wide column" id="side">
      <div class="ui secondary vertical fluid menu">
      </div>
    </div>
    <div class="twelve wide column">
    <h2>List Booking Buku</h2>
        <div class="ui container">
          <div class="ui one stackable cards">
             
                 <?php 
                 $user = $login_session;
                 $queryuser = mysql_query("select id_user from user WHERE nama_user='$user'", $connection);
                 while($datauser = mysql_fetch_assoc($queryuser)){
                  $id_user = $datauser['id_user'];
                 }

                 $querybooking = mysql_query("select * from booking WHERE id_user='$id_user'", $connection);

                  while($databooking = mysql_fetch_assoc($querybooking)){
                      $id_buku = $databooking['id_buku'];
                      $querybuku = mysql_query("select * from buku WHERE id_buku='$id_buku'", $connection);
                      while($databuku = mysql_fetch_assoc($querybuku)){
                    echo '<div class="card">
                        <div class="content">';
                    echo '<div class="header">'.$databuku['nama_buku'].'</div>';
                    if($databooking['status_pinjam']=='0'){
                    echo '<div class="ui right floated">Status : Pending</div>';
                    }else{
                      echo '<div class="ui right floated">Status : Sudah Dipinjam</div>';
                    }
                    echo '<div class="description">'.$databuku['deskripsi_buku'].'</div>';
                    if($databooking['status_pinjam']=='0'){
                      echo '<a href="?p=cart-proses&buku='.$databuku['id_buku'].'&user='.$id_user.'" class="ui right floated inverted red button">Batal</a>';
                    }else{
                      
                    }
                    echo '</div>
                        </div>';
                      }
                    } ?>
              
         </div>
         </div>
    </div>

