<?php
try
{
    $bdd= new PDO("localhost:8889",
    "root",
    "root",
    "afterlife",
    [PDO:: ATTR_ERRMODE => PDO:: ERRORMODE_EXCEPTION],);
}
    catch (Exception $e)
    {
        die('erreur : ' . $e->getMessage())
    }

?>

