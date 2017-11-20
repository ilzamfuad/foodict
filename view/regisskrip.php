<?php
	
	$error='';
	if(isset($_POST['submit'])){
		if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['name']) || empty($_POST['alamat']) || empty($_POST['tempat']) || empty($_POST['tanggal'])){
			$error = "Data Kurang";
		}
		else
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
			$name = $_POST['name'];
			$alamat = $_POST['alamat'];
			$tanggal = $_POST['tanggal'];
			$tempat = $_POST['tempat'];
					// Membangun koneksi ke database
			include('../config/db.php');
			// SQL query untuk memeriksa apakah karyawan terdapat di database?
			$input = mysql_query("INSERT INTO user VALUES(NULL, '$name', '$alamat', '$tempat', '$tanggal', '$username', '$password')") or die(mysql_error());
	
			//jika query input sukses
			if($input){
				
				$error = 'Berhasil Daftar';	//Pesan jika proses tambah sukses
				
				
			}else{
				
				$error = "Data Kurang";
				
			}
			
			mysql_close($connection); // Menutup koneksi
		}
	}
?>