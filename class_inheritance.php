<?php

class Cars
{
    var $wheels = 4;

    function greeting()
    {
        return "Hello";
    }
}

$bmw = new Cars();

class Trucks extends Cars
{
    
}

$tacoma = new Trucks();

echo $tacoma->wheels;

echo "<br/><br/>";

echo $tacoma->greeting();


?>