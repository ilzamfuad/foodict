<?php 
include('config/db.php');

$user = $_GET['user'];
$buku = $_GET['buku'];
$date = date('Y-m-d');

$queryuser = mysql_query("select id_user from user WHERE nama_user='$user'", $connection);
while($datauser = mysql_fetch_assoc($queryuser)){

	$bookinguser = $datauser['id_user'];
}

$input = mysql_query("INSERT INTO booking VALUES(NULL, '$date', '','$bookinguser', '$buku', '0')") or die(mysql_error());

if($input){
		
		echo '<div id="booking">Buku berhasil di booking! ';		//Pesan jika proses tambah sukses
		echo '<a  href="?p=content-book">Kembali</a></div>';	//membuat Link untuk kembali ke halaman tambah
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a id="booking" href="?p=detail-book&buku='.$buku.'">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}
?>