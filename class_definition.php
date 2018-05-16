<?php

class Cars
{

}

$my_classes = get_declared_classes();

foreach ($my_classes as $value) 
{
    echo $value . "<br/>";
}


?>