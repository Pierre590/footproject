<?php

require('model/teams.php');


function teams()
{
    $teams = getTeams();

    require('view/teams.php');
}
