<?php

require('utils/db.php');


function getCoachs()
{
    $db = dbConnect();

    $coachs = $db->prepare('SELECT coachs.*,teams.name AS team_name, teams.logo, teams.id FROM `coachs` INNER JOIN coachs_has_teams ON coachs.id =
        coachs_has_teams.id_coach INNER JOIN teams ON teams.id = coachs_has_teams.id_team');
    $coachs->execute();

    return $coachs->fetchAll();
}



 ?>
