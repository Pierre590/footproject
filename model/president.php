<?php

require('utils/db.php');


function getPresident()
{
    $db = dbConnect();

    $president = $db->prepare('SELECT president FROM teams');
    $president->execute();

    return $president->fetchAll();
}



 ?>
