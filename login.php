<style><?php
    include("index.css");
?></style>
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
    
</head>
<?php include('video.php') ?>
<body>
<header>
    <?php include_once('header.php') ?>
</header>
<?php
    include_once("callbdd.php");
?>

<?php
    if (isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $checkUser = $bdd->prepare("SELECT * FROM users ");
        $checkUser->execute();
        $users=$checkUser->fetchAll();

        foreach ($users as $user){
            if (
                $user['email'] == $email &&
                $user['password'] == $password
            ) {
                echo "Bonjour " . $user['pseudo'] .", bienvenue sur Afterlife" ;

                $_SESSION['logged_user'] = $user['id'] ;
            } else {
                $errorMessage = sprintf('mauvaises infos');
            }
        }
   
    }

?>

<div class="subscription_form">
    <form class="form" method="post">
        <label>Email</label>
        <input type='email' name='email'></input>
        <label>Password</label>
        <input type="password" name="password"></input>
        <input type="submit" value="Se connecter"></input>
    </form>
</div>