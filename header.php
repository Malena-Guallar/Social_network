<?php 
    include("callbdd.php")
?>

<nav id = "header_nav">
    <div>
        <a href="index.php"><img src="assets/Icon_afterlife.png" alt="" /></a>
        <ul>
            <li><a href="news.php">News</a></li>
            <li><a href="posts.php?user_id=<?php echo $logged_user ?>">Posts</a></li>
        </ul>
    </div>
    <div>
        <ul>
            <li><a href="login.php">Login</a></li>
            <li><a href="index.php">Sign Up</a></li>
        </ul>
    </div>
</nav>