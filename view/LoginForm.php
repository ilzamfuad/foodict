<?php 
   include('loginskrip.php');

   if(isset($_SESSION['login_user'])){
      header("location: ../index.php");
   }
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  
  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

      <link rel="stylesheet" href="../public/css/style.css">


  
</head>

<body>
    <div class="wrapper">
    <form class="form-signin" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">       
    <a href="../admin/index.php" class="btn btn-lg btn-warning btn-block" style="width: 135px;height: 45px;">Login as Admin</a>
      <h2 class="form-signin-heading">Please login User</h2>
      <p><?php echo $error; ?></p>
      <input id="name" name="username" class="form-control" placeholder="username" type="text" placeholder="Email Address" required="" autofocus="">
      <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="">      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <input id="submit" name="submit" class="btn btn-lg btn-primary btn-block" type="submit" value="Login">
      <a href="RegistrationForm.php" class="btn btn-lg btn-success btn-block">Daftar</a>
    </form>
  </div>
  
  
</body>
</html>
