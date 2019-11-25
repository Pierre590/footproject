<?php


function dbConnect()
{
    try
    {
        return new PDO('mysql:host=localhost;dbname=football_french_championship;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}



?>
