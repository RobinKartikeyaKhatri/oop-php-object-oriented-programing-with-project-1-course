<?php

class Cars
{

    public $wheel_count = 4;
    private $door_count = 4;
    protected $seat_count = 2;

    function car_detail()
    {
        echo $this->wheel_count . "<br/>";
        echo $this->door_count . "<br/>";
        echo $this->seat_count . "<br/>";
    }
}

$bmw = new Cars();

$bmw->car_detail();

echo "<br/><br/>";

echo $bmw->wheel_count . "<br/>";
//echo $bmw->door_count . "<br/>";
//echo $bmw->seat_count . "<br/>";


?>