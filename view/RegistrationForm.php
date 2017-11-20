<?php 
   include('regisskrip.php');
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Regis Form</title>
  
  
  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

      <link rel="stylesheet" href="../public/css/style.css">
      <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="../public/js/date.js"></script>
    <script src="../public/js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

</head>

<body>
    <div class="wrapper">
    <form class="form-signin" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">       
      <h2 class="form-signin-heading">Please Register</h2>
      <p><?php echo $error; ?></p>
      <input id="name" name="username" class="form-control" placeholder="username" type="text" placeholder="Email Address" required="" autofocus="">
      <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="">

      <input id="nama" name="name" class="form-control" placeholder="Nama" type="text" required="" > 
      <input id="alamat" name="alamat" class="form-control" placeholder="Alamat" type="text" required="" > 
      <input id="tempat" name="tempat" class="form-control" placeholder="Tempat Lahir" type="text" required="" autofocus="">
      <input id="datepicker" name="tanggal" class="form-control" placeholder="ex. 1996-06-25" type="text" required="" autofocus="">
      
      <input id="submit" name="submit" class="btn btn-lg btn-primary btn-block" type="submit" value="Daftar" style="margin-top: 10px">
      <a href="LoginForm.php" class="btn btn-lg btn-success btn-block">Login</a>
    </form>
  </div>
  
  
</body>
</html>