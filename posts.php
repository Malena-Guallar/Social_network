<?php
    include("callbdd.php");
?>

<?php 
    session_start() ;
    $logged_user = $_SESSION['logged_user'];
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
            
            $title = $_POST['title'];
            $content = $_POST['message'];
            $user_id = $_GET['user_id'];

            $insertPost = 'INSERT INTO posts(post_id, user_id, content, created, title) VALUES (NULL, "'.$user_id.'", "'.$content.'", NOW(), "'.$title.'")';
            $information = $bdd->query($insertPost);
            
            if (!$information){
                echo "Message non publié";
            }
            else {
                echo "Message publié, ";
                ?> <a href="news.php?user_id= <?php echo $logged_user ?>">Actus</a><?php 
    
            }
        }

    }
    else {
        echo "Veuillez vous connecter pour publier un message.";
        ?><a href='login.php'>Log in</a><?php

    }



?>

<h1>envoie ton message vers l'au-delà</h1>


<div id="container_form">
    <form action="" method="post" class="post_form">
            <label class="label_title">Titre</label>
            <input type="text" name="title" class="input_title"></input>
            <br>
            <label class="label_message">Message</label>
            <textarea type ="text" name="message" cols=50 rows=5></textarea>
            <br>
            <br>
            <input type="submit" value="Publier" class="send_button"></input>
    </form>
</div>
</body>
</html>