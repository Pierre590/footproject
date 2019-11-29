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

/*function getMatchs ($id)
{
    $db = dbConnect();

    $team = $db->prepare('SELECT * FROM matchs WHERE id_team_home = ' . $id . ' OR id_team_away = ' . $id);
    $team->execute();
    return $team->fetchAll();
}*/


function getReqMatchs($idTeam) { //la fonction servira a alimenter les deux suivantes
  return 'SELECT
    matchs.*, th.name AS team_home, ta.name AS team_away
    FROM matchs
    INNER JOIN teams AS th ON th.id = matchs.id_team_home
    INNER JOIN teams AS ta ON ta.id = matchs.id_team_away
    WHERE (th.id = ' . $idTeam . ' OR ta.id = ' . $idTeam . ') ';
}

function getMachsPlayed($idTeam) {
  $db = dbConnect();
  $request = $db->prepare(getReqMatchs($idTeam) . 'AND score_away IS NOT NULL');
  $request-> execute();
  $data = $request->fetchAll();
  return $data;
}
function getMachsNotPlayed($idTeam) {
  global $reqMatch;
  $db = dbConnect();
  $request = $db->prepare(getReqMatchs($idTeam) . 'AND score_away IS NULL');
  $request-> execute();
  $data = $request->fetchAll();
  return $data;
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
