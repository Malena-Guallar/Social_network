<?php
    include("callbdd.php");
?>

<?php 
    session_start() ;
    $logged_user = $_SESSION['logged_user'];
?>

<style><?php
    include("index.css")
?></style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afterlife</title>
</head>
<?php include('video.php') ?>
<body>
<header>
    <?php
        include_once("header.php");
    ?>
</header>


<?php

    if ($logged_user){
        
        $searchPost = $bdd->prepare('SELECT posts.title, posts.user_id, posts.content, posts.created, users.pseudo FROM posts JOIN users ON users.id = posts.user_id') ;
        $searchPost->execute();
        $posts = $searchPost->fetchAll();


        foreach ($posts as $post){
            ?>
                <div class="post_container">
                    <div id="pseudo">
                        <p><?php echo $post['pseudo']?></p>
                    </div>
                    <div id="time">
                        <p>
                            <time><?php echo $post['created']?></time>
                         </p>
                    </div>
                    <div id="content">
                        <p><?php echo $post['content']?></p>
                    </div>
                    
                    
                </div>

            <?php
        }
        ?>
        <?php



    } else {

        echo "Connectez-vous pour voir les messages"
        ?> <a href="login.php">Login</a><?php 

    }

?>