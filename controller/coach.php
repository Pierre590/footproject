<?php

require('model/coach.php');


function coach()
{
    $coachs = getCoachs();

    require('view/coach.php');
}
