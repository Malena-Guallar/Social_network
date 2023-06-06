<?php
    session_start();
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
    <link rel="stylesheet" href="index.css?<?php echo time(); ?>"/>
</head>
<?php include('video.php') ?>
<body>
<header>
<?php
    include_once("header.php");
?>
</header>
<?php
    include_once("callbdd.php");
?>
<?php
    if (isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"]))
    {
        if ($_POST["username"] == "" || $_POST["email"] == "" || $_POST["password"] == ""){
            echo "Empty fields";
        }
        else{

            $email = $_POST["email"];
            // Vérification si l'email existe déjà
            $checkEmailQuery = 'SELECT email FROM users WHERE email = "'.$email.'"';
            $checkEmailResult = $bdd->query($checkEmailQuery);
            $emailCount = $checkEmailResult->fetchColumn();

            $emailExists = false;
            if ($_POST["email"] == $emailCount) {
                $emailExists = true;
                echo "Email is already used. Please use another email.";
            }
            else{
                $username = $_POST["username"];
                $email = $_POST["email"];
                $password = $_POST["password"];

                $insertUser = 'INSERT INTO users(id, pseudo, email, password) VALUES (NULL, "'.$username.'" , "'.$email.'" , "'.$password.'")';

                $information = $bdd->query($insertUser);

                if (!$information){
                    echo "Your account is false";
                }
                else {
                    echo "Your account is created, ";
                    ?> <a href="login.php">log here</a><?php
                }
            }
        }
    }
?>
<div class="subscription_form">
    <form class="form" action="" method="post">
        <label>Username</label>
        <input type="text" name= "username">
        <br>
        <label>Email</label>
        <input type="text" name = "email">
        <br>
        <label>Password</label>
        <input type="password" name = "password">
        <br>
        <input class="bouton" type="submit" value="Créer un compte">
    </form>
</div>
<footer>

</footer>
</body>
</html>