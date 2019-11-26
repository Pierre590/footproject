<?php

$path = isset($_GET['path']) ? $_GET['path'] : 'teams';

if ($path === 'teams') {
    require('controller/teams.php');
    teams();
} else if ($path === 'coach') {
    require('controller/coach.php');
    coach();
}else if ($path === 'team') {
    require('controller/team.php');
    $idTeam = $_GET['id'];
    team($idTeam);
}



?>
