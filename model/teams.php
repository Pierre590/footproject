<?php

require('utils/db.php');


function getTeams()
{
    $db = dbConnect();

    $teams = $db->prepare('SELECT * FROM teams');
    $teams->execute();

    return $teams->fetchAll();
}



 ?>
