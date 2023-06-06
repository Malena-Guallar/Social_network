<?php 
    include("callbdd.php")
?>

<style><?php
    include("styleheader.css");
?></style>

<nav id = "header_nav">
    <div>
        <a href="index.php"><img id= "icon" src="assets/Icon_afterlife.png" alt="" /></a>
        <a href="news.php">News</a>
        <a href="posts.php?user_id=<?php echo $logged_user ?>">Posts</a>
    </div>
    <div>
        <a href="login.php">Login</a>
    </li><a href="index.php">Sign Up</a>
    </li><a href="logout.php">Logout</a>
    </div>
</nav>