<?php

$path = isset($_GET['path']) ? $_GET['path'] : 'teams';

if ($path === 'teams') {
    require('controller/teams.php');
    teams();
} else if ($path === 'coach') {
    require('controller/coach.php');
    coach();
}

?>
