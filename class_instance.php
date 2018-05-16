<?php

class Cars
{
    function greeting()
    {
        echo "Hello Student, how are you?" . "<br/>";
    }
}

$bmw        = new Cars();
$mercedes   = new Cars();

$bmw->greeting();
$mercedes->greeting();




?>