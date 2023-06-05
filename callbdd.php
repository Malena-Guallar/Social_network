<?php
try
{
    $bdd= new PDO(    
    'mysql:host=localhost:8889;dbname=afterlife;charset=utf8',
    'root',
    'root',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
); }
    catch (Exception $e)
    {
        die('erreur : ' . $e->getMessage());
    } ;

?>

