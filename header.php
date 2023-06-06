<?php 
    include("callbdd.php")
?>

<style><?php
    include("styleheader.css");
?></style>

<p class="app_connect"> Vous êtes connecté en tant que <?php echo $logged_username ?></p>
<div>
<p class="app_infos">A project by JJ, Malena & Maylis</p>
</div>




<nav id = "header_nav">
    <div>
        <!-- <a href="index.php"><img id= "icon" src="assets/Icon_afterlife.png" alt="" /></a> -->
        <a href="news.php?user_id=<?php echo $logged_user ?>">news</a>
        <a href="posts.php?user_id=<?php echo $logged_user ?>">send</a>
    </div>
    <div class="app_name">
        <h1>AFTERLIFE</h1>
    </div>
    <div>
        <a href="login.php">Login</a>
    </li><a href="index.php">Sign Up</a>
    </li><a href="logout.php">Logout</a>
    </div>
</nav>