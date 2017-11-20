<?php

if(isset($_SESSION['login_user'])){
      header("location: ../index.php");
}
if(!empty($_REQUEST['p'])){
    $activePage = $_REQUEST['p'];
      }else{
        $activePage = "content-home";
      }
?>

<header>
    <!--Folowing Menu-->
    <div id="nav-header" class="ui inverted fixed hidden square borderless menu">
        <div class="ui container">
            <div class="item">
                <a href="index.php">
                    <img class="ui small image" src="public/images/logo.png">
                </a>
            </div>
           <a href="?p=content-home" class="<?php if ($activePage=="content-home") {echo "item active"; } else  {echo "item";}?>">Home</a>
            <a href="?p=content-library" class="<?php if ($activePage=="content-library") {echo "item active"; } else  {echo "item";}?>">Search</a>
            <a href="?p=about" class="<?php if ($activePage=="about") {echo "item active"; } else  {echo "item";}?>">About</a>

            <!-- <div class="right menu">
                
                <div class="item">
                    <a href="view/LoginForm.php" class="ui button" id="button-login">Login</a>
                </div>
                <div class="item">
                    <a href="view/RegistrationForm.php" class="ui primary button" id="button-login">Daftar</a>
                </div>
            </div> -->
        </div>
    </div>

    <!--Menu-->
    <div id="nav-header" class="ui  square borderless menu">
        <div class="ui container">
            <div class="item">
                <a href="index.php">
                    <img class="ui small image" src="public/images/logo.png">
                </a>
            </div>
            <a href="?p=content-home" class="<?php if ($activePage=="content-home") {echo "item active"; } else  {echo "item";}?>">Home</a>
            <a href="?p=search" class="<?php if ($activePage=="search"|| $activePage=="search-detail") {echo "item active"; } else  {echo "item";}?>">Search</a>
            <a href="?p=about" class="<?php if ($activePage=="about") {echo "item active"; } else  {echo "item";}?>">About</a>

            <!-- <div class="right menu">

                <div class="item">
                    <a href="view/LoginForm.php" class="ui button" id="button-login">Login</a>
                </div>
                <div class="item">
                    <a href="view/RegistrationForm.php" class="ui primary button" id="button-login">Daftar</a>
                </div>
            </div> -->
        </div>
    </div>
</header>