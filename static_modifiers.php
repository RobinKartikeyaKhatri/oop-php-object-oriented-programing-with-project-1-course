<?php

class Cars
{

    public $wheel_count = 4;
    static $door_count = 4;


    static function car_detail()
    {
        echo Cars::$door_count . "<br/>";   
    }
}

$bmw = new Cars();

echo $bmw->wheel_count . "<br/>";
echo Cars::$door_count . "<br/>";
Cars::car_detail();



?>