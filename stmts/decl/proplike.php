<?php

function x($var_name){
    global $some, $$$var_name;
    echo $some . $$var_name;
}

$some = "other";
$other = "data";
x($some);
