<?php

require('utils/db.php');


function getCoachs()
{
    $db = dbConnect();

    $coachs = $db->prepare('SELECT name FROM coachs');
    $coachs->execute();

    return $coachs->fetchAll();
}



 ?>
