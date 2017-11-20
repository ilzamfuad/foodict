<?php 
include('config/db.php');

$buku = $_GET['buku'];
$user = $_GET['user'];

$cek = mysql_query("SELECT * FROM booking WHERE id_buku='$buku' AND id_user = '$user'") or die(mysql_error());
	
	//jika data siswa tidak ada
	if(mysql_num_rows($cek) == 0){
		
		//jika data tidak ada, maka redirect atau dikembalikan ke halaman beranda
		echo 'gak onok data';
	
	}else{

$del = mysql_query("DELETE FROM booking WHERE id_buku='$buku' AND id_user = '$user'", $connection);


if($del){
		
		echo '<div id="book">Booking buku berhasil di dibatalkan! ';		//Pesan jika proses tambah sukses
		echo '<a href="?p=cart">Kembali</a></div>';	//membuat Link untuk kembali ke halaman tambah
		
	}else{
		
		echo 'Gagal Membatalkan Booking! ';		//Pesan jika proses tambah gagal
		echo '<a id="booking" href="?p=cart">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}
}
?>