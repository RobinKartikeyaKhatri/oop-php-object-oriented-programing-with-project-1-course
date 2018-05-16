<?php

class Cars
{

    public $wheel_count = 4;
    static $door_count = 5;

    function __construct()
    {
        echo "This car has " . $this->wheel_count . " wheels" . "<br/>";
        echo "This car has " . self::$door_count . " doors" . "<br/>";
    }

    function __destruct()
    {
        echo "Now this car has " . $this->wheel_count = $this->wheel_count - 1 . " wheels" . "<br/>";
        echo "Now this car has " . self::$door_count = self::$door_count - 1 . " doors" . "<br/>";
    }
}

$bmw = new Cars();



?>