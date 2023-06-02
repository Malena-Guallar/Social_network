<style><?php
    include("index.css");
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
                echo "c'est bon" ;

                $_SESSION['logged_user'] = $user['email'] ;
            } else {
                $errorMessage = sprintf('mauvaises infos');
            }
        }
   
    }

?>







<form  method="post">
    <label>email</label>
    <input type='email' name='email'></input>
    <label>password</label>
    <input type="password" name="password"></input>
    <input type="submit" value="Se connecter"></input>
</form>