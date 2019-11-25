<?php

require('utils/db.php');


function getTeams()
{
    $db = dbConnect();

    $teams = $db->prepare('SELECT name, short_name ,fundation_date, president,adress,website,logo,link FROM teams');
    $teams->execute();

    return $teams->fetchAll();
}



 ?>
