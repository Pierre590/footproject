<?php

require('model/team.php');


function team($idTeam)

{
    $matchsPlayed = getMachsPlayed($idTeam);
    $matchsNotPlayed = getMachsNotPlayed($idTeam);
    $coach = getCoachs($idTeam);
    $team = getTeam($idTeam);
    $players = getPlayers($idTeam);

    require('view/team.php');
}
