<?php

session_start();
$logged_user = $_SESSION['logged_user'];

if (isset($logged_user)) {
    session_destroy();

    echo "<script>location.href='index.php'</script>";
}
else {
    echo "<script>location.href='index.php'</script>";
}
?>