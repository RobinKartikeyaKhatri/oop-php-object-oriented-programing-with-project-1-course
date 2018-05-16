<?php

class Cars
{

    var $wheel_count = 4;
    var $door_count = 4;

    function car_detail()
    {
        echo "BMW has " . $this->wheel_count . " wheels" . "<br/>";
        echo "BMW has " . $this->door_count . " doors" . "<br/>";
    }
}

$bmw        = new Cars();
$mercedes   = new Cars();

echo  "This car has " . $bmw->wheel_count . " wheels" . "<br/>";
echo  "This car has " . $bmw->door_count . " doors" . "<br/>";

echo "<br/><br/>";

$bmw->car_detail();

echo "<br/><br/>";

$mercedes->wheel_count = 5;
$mercedes->door_count = 5;

echo "Mercedes has " . $mercedes->wheel_count . " wheels" . "<br/>";
echo "Mercedes has " . $mercedes->door_count . " doors" . "<br/>";

echo "<br/><br/>";

echo "Now BMW has " . $bmw->wheel_count = 8 . " wheels" . "<br/>";
echo "Now BMW has " . $bmw->door_count = 8 . " doors" . "<br/>";

?>