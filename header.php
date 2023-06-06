
<?php 
    include("callbdd.php")
?>

<style><?php
    include("styleheader.css");
?></style>


<div class="app_name">
    <p class="app_infos">a project by JJ, Malena & Maylis</p>
        <h1 class="name">AFTERLIFE</h1>
</div>

<nav id = "header_nav">
    <div>
        <!-- <a href="index.php"><img id= "icon" src="assets/Icon_afterlife.png" alt="" /></a> -->
        <a href="news.php?user_id=<?php echo $logged_user ?>">news</a>
        <a href="posts.php?user_id=<?php echo $logged_user ?>">send</a>
    </div>
    <!-- <div class="app_name">
        <h1>AFTERLIFE</h1>
    </div> -->
    <div>
        <a href="login.php">login</a>
    </li><a href="index.php">sign Up</a>
    </li><a href="logout.php">logout</a>
    </div>
</nav>

<?php
 
    if ($logged_user && $logged_username) {
        ?> 
        
        <div class="user_name">
        <p class="app_connect">Connecté.e en tant que <?php echo $logged_username ?></p>
        </div>
        
        <?php

    }

?>
   