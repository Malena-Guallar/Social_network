<?php
    include("callbdd.php");
?>

<?php 
    session_start() ;
    $logged_user = $_SESSION['logged_user'] ?? null ;
    $logged_username = $_SESSION['logged_username'] ?? null;
?>

<style><?php
    include("posts.css")
?></style>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afterlife</title>
    <link rel="stylesheet" href="post.css?<?php echo time(); ?>"/>
</head>
<?php include('video.php') ?>
<body>
<header>
    <?php
        include_once("header.php");
    ?>
</header>


<?php

    if ($logged_user) {
        if (isset($_POST['title']) && isset($_POST['message'])) {
            
            if ($_POST['title'] != "" || $_POST['message'] != "")
            {
                $title = $_POST['title'];
                $content = $_POST['message'];
                $user_id = $_GET['user_id'];

                $insertPost = 'INSERT INTO posts(post_id, user_id, content, created, title) VALUES (NULL, "'.$user_id.'", "'.$content.'", NOW(), "'.$title.'")';
                $information = $bdd->query($insertPost);
                
                if (!$information){
                    echo "Message not sent";
                }
                else {
                    echo "Message sent";
                    ?> <a href="news.php?user_id= <?php echo $logged_user ?>">News</a><?php 
        
                }
            }
            else{
                echo "Message or title is empty.";
            }
        }
    }
    else {
        echo "Please log in to send a message";
        ?><a href='login.php'>Log in</a><?php

    }



?>

<div id="container_form">

    <form action="" method="post" class="post_form">
    <h1 class="page_infos">send your message beyond</h1>
    <br>
    <br>
            <label class="label_title">Title</label>
            <br>
            <div id="input_title">
            <input type="text" name="title" class="input_title"></input>
            </div>
            <br>
            <label class="label_message">Message</label>
            <br>
            <textarea type ="text" name="message" cols=50 rows=5></textarea>
            <br>
            <br>
            <div id="send_button">
            <input type="submit" value="Send" class="send_button"></input>
            </div>
    </form>
</div>
</body>
</html>