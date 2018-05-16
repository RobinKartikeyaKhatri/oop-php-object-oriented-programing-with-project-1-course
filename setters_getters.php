<?php

class Cars
{
    private $door_count;

    function get_values()
    {
        echo "This car has " . $this->door_count . " doors" . "<br/>";   
    }

    function set_values()
    {
        $this->door_count = 4;
    }
}

$bmw = new Cars();

$bmw->set_values();
$bmw->get_values();


?>