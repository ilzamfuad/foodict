<?php
	include('config/db.php');
	
	$user = $login_session;
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$show = mysql_query("SELECT * FROM user WHERE username_user='$user'");
	
	//cek apakah data dari hasil query ada atau tidak
	if(mysql_num_rows($show) == 0){
		
		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
		echo '<script>window.history.back()</script>';
		
	}else{
	
		//jika data ditemukan, maka membuat variabel $data
		$data = mysql_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
		$id = $data['id_user'];
	
	}
?>

<div class="ui divider"></div>
  <div class="ui grid">
    <div class="three wide column" id="side">
      <div class="ui secondary vertical fluid menu">
      
      </div>
    </div>
    <div class="twelve wide column">
    <h2>Edit Profile</h2>
       <form class="ui form" action="?p=profile/edit-proses" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	<!-- membuat inputan hidden dan nilainya adalah siswa_id -->
		<div class="field">
			<label>Nama User</label>
		    <input type="text" name="nama" value="<?php echo $data['nama_user']; ?>" placeholder="Nama User" required>
		</div>
		<div class="field">
			<label>Alamat User</label>
		    <input type="text" name="alamat" value="<?php echo $data['alamat_user']; ?>" placeholder="Alamat User" required>
		</div>
		<div class="field">
			<label>Tempat Lahir</label>
		    <input type="text" name="tempat" value="<?php echo $data['tempat_lahir_user']; ?>" placeholder="Tempat Lahir" required>
		</div>
		<div class="field">
			<label>Tanggal Lahir</label>
		    <input id="datepicker" type="text" name="tanggal" value="<?php echo $data['tanggal_lahir_user']; ?>" placeholder="Latitude" required>
		</div>
		<div class="field">
			<label>Username</label>
		    <input type="text" name="username" value="<?php echo $data['username_user']; ?>" placeholder="Username" required>
		</div>
		<div class="field">
			<label>Password</label>
		    <input type="text" name="password" value="<?php echo $data['password_user']; ?>" placeholder="Password" required>
		</div>
		<input class="ui green button" type="submit" name="submit" value="Simpan">
		
	</form>
    </div>
  