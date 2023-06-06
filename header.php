<?php 
    include("callbdd.php")
?>

<style><?php
    include("styleheader.css");
?></style>

<div>
<p class="app_infos">a project by JJ, Malena & Maylis</p>
</div>

<nav id = "header_nav">
    <div>
        <!-- <a href="index.php"><img id= "icon" src="assets/Icon_afterlife.png" alt="" /></a> -->
        <a href="news.php">news</a>
        <a href="posts.php?user_id=<?php echo $logged_user ?>">send</a>
    </div>
    <div class="app_name">
        <h1>AFTERLIFE</h1>

    </div>
    <div>
        <a href="login.php">login</a>
    </li><a href="index.php">sign up</a>
    </div>
</nav>