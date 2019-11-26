<?php

require('utils/db.php');

function getTeam($id)
{
    $db = dbConnect();

    $team = $db->prepare('SELECT * FROM teams WHERE id = ' . $id);
    $team->execute();
    return $team->fetch();

}

function getCoachs ($id)
{
    $db = dbConnect();

    $team = $db->prepare('SELECT * FROM coachs WHERE id = ' . $id);
    $team->execute();
    return $team->fetch();
}


function getPlayers($idTeam)
{
    $db = dbConnect();

    $players = $db->prepare('SELECT players.*,teams.name AS team_name,teams.logo, teams.id FROM `players` INNER JOIN players_has_teams ON players.id =
         players_has_teams.id_player INNER JOIN teams ON teams.id = players_has_teams.id_team WHERE teams.id = '.$idTeam);
    $players->execute();

    return $players->fetchAll();
}



 ?>
