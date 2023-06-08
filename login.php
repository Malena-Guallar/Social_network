<style><?php
    include("index.css");
    include("styleLogin.css");
?></style>
<?php 
    session_start() ;
    $logged_user = $_SESSION['logged_user'] ?? null ;
    $logged_username = $_SESSION['logged_username'] ?? null;
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
                ?> 
                <p class="welcome_message">Hello <?php echo $user['pseudo']; ?>, welcome to Afterlife</p>
                <?php
                $_SESSION['logged_user'] = $user['id'] ;
                $_SESSION['logged_username'] = $user['pseudo'] ;
            } else {
                $errorMessage = sprintf('mauvaises infos');
            }
        }
   
    }

?>

<div class="subscription_form">
    <form class="form" method="post" action="">
        <label>Email</label>
        <br>
        <input class='input' type='email' name='email'></input>
        <label>Password</label>
        <br>
        <input class="input" type="password" name="password"></input>
        <br>
        <input id="loginButton" type="submit" value="Log In"></input>
    </form>
</div>