<?php
//mulai proses edit data
 
//cek dahulu, jika tombol simpan di klik
if(isset($_POST['submit'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('config/db.php');
	
	$id			= $_POST['id'];	
	$nama		= $_POST['nama'];	
	$alamat		= $_POST['alamat'];	
	$tanggal		= $_POST['tanggal'];	
	$tempat	= $_POST['tempat'];	
	$username	= $_POST['username'];	
	$password	= $_POST['password'];	
	
	$update = mysql_query("UPDATE user SET id_user='$id', nama_user='$nama', alamat_user='$alamat', tempat_lahir_user='$tempat', tanggal_lahir_user='$tanggal', username_user='$username' , password_user='$password' WHERE id_user='$id'") or die(mysql_error());
	
	//jika query update sukses
	if($update){
		
		echo '<div style="margin: 20px">Profile berhasil di ubah! ';		//Pesan jika proses simpan sukses
		echo '<a href="index.php">Kembali</a></div>';	//membuat Link untuk kembali ke halaman edit
		
	}else{
		
		echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
		echo '<a href="index.php?p=profile/profile&id='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}
 
}else{	//jika tidak terdeteksi tombol simpan di klik
 
	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';
 
}
?>