<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
</header>
<?php
    include_once("callbdd.php")
?>
<?php
    if (isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"]))
    {
        $username = $_POST["username"]
        $email = $_POST["email"]
        $password = $_POST["password"]

        $insertUser = 'INSERT INTO users(ID, Pseudo, Email, Password) VALUES (NULL, "'" $username"'", "'" $email"'", "'" $password"'")'
        $information = $bdd->query($insertUser)

        if (!$information){
            echo "Your account is false"
        }
        else
            echo "Your account is created"
    }
?>
<div>
    <form action="" method="post">
        <label>Username</label>
        <input type="text" name= "username">
        <label>Email</label>
        <input type="text" name = "email">
        <label>Password</label>
        <input type="text" name = "password">
    
        <input type="submit">
    </form>
</div>
<footer>

</footer>
</body>
</html>