<?php

require('model/president.php');


function president()
{
    $president = getPresident();

    require('view/president.php');
}
