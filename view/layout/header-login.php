<?php
    $tampilan = "";
    include('view/session.php');
    if(!empty($_REQUEST['p'])){
    $activePage = $_REQUEST['p'];
      }else{
        $activePage = "content-home";
      }
    $query = mysql_query("SELECT * FROM user WHERE username_user = '$login_session'") or die(mysql_error());
    while($data = mysql_fetch_assoc($query)){
        $tampilan = $data['nama_user'];
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
            <a href="?p=content-library" class="<?php if ($activePage=="content-library"||$activePage=="detail-library") {echo "item active"; } else  {echo "item";}?>">Perpustakaan</a>
            <a href="?p=content-book" class="<?php if ($activePage=="content-book"||$activePage=="detail-book") {echo "item active"; } else  {echo "item";}?>">Buku</a>

            <div class="right menu">
                
                <div class="item">
                    <a href="?p=cart" class="item">
                        <div class="ui header cart">
                            <i class="big blue book icon"></i>
                        </div>
                    </a>
                </div>
                
                <div class="ui dropdown item">
                  <div class="text">Welcome : <?php echo $tampilan; ?></div>
                  <i class="dropdown icon"></i>
                  <div class="menu">
                        <a href="?p=profile/profile" class="item">Profile</a>
                        <a href="view/Logout.php" class="item">Logout</a>
                  </div>
                </div>
                
            </div>
        </div>
    </div>

    <!--Menu-->
    <div id="nav-header" class="ui square borderless menu">
        <div class="ui container">
            <div class="item">
                <a href="index.php">
                    <img class="ui small image" src="public/images/logo.png">
                </a>
            </div>
            <a href="?p=content-home" class="<?php if ($activePage=="content-home") {echo "item active"; } else  {echo "item";}?>">Home</a>
            <a href="?p=content-library" class="<?php if ($activePage=="content-library"||$activePage=="detail-library") {echo "item active"; } else  {echo "item";}?>">Perpustakaan</a>
            <a href="?p=content-book" class="<?php if ($activePage=="content-book"||$activePage=="detail-book") {echo "item active"; } else  {echo "item";}?>">Buku</a>

            <div class="right menu">
                
                <div class="item">
                    <a href="?p=cart" class="item">
                        <div class="ui header cart">
                            <i class="big blue book icon"></i>
                        </div>
                    </a>
                </div>
                <div class="ui dropdown item" >
                  <div class="text">Welcome : <?php echo $tampilan; ?></div>
                  <i class="dropdown icon"></i>
                  
                  <div class="menu">
                        <a href="?p=profile/profile" class="item">Profile</a>
                        <a href="view/Logout.php" class="item">Logout</a>
                  </div>
                </div>
                
            </div>
        </div>
    </div>
</header>
<script>
    $('.ui.dropdown').dropdown('hide');
</script>
