<?php
    include("callbdd.php");
?>

<?php 
    session_start() ;
    $logged_user = $_SESSION['logged_user'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afterlife</title>
    <link rel="stylesheet" href="news.css?<?php echo time(); ?>"/>
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
        
        $searchPost = $bdd->prepare('SELECT posts.title, posts.user_id, posts.content, posts.created, users.pseudo FROM posts JOIN users ON users.id = posts.user_id ORDER BY posts.created DESC') ;
        $searchPost->execute();
        $posts = $searchPost->fetchAll();


        foreach ($posts as $post){
            ?>
                <div class="post_container">
                    <div id="pseudo">
                        <p>Posté par <?php echo $post['pseudo']?></p>
                        <br/>
                        <p><?php echo $post['created']?></p>
                    </div>
                    <div id="post">
                        <div id="post_title">
                            <p><?php echo $post['title']?></p>
                        </div>
                        <div id="post_content">
                            <p><?php echo nl2br($post['content']);?></p>
                        </div>
                    </div>
                    
                    
                </div>

            <?php
        }
        ?>
        <?php



    } else {

        ?> <p class="connect">Connectez-vous pour voir les messages</p>
        <p class="connect"><a href="login.php">Login</a></p><?php 

    }

?>