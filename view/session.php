<?php

include('config/db.php');
// Memulai Session
// Menyimpan Session
$user_check=$_SESSION['login_user'];
// Ambil nama karyawan berdasarkan username karyawan dengan mysql_fetch_assoc
$ses_sql=mysql_query("select username_user from user where username_user='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username_user'];
if(!isset($login_session)){
	mysql_close($connection); // Menutup koneksi
	header('Location: index.php'); // Mengarahkan ke Home Page
}
?>