<?php

class Cars
{
    function sayHello()
    {
        echo "Hello World!";
    }

    function greeting()
    {

    }
}

if(method_exists('Cars', 'sayHello'))
{
    echo "Yes there is a method called sayHello in the class" . "<br/>";
}

$the_method = get_class_methods('Cars');

foreach ($the_method as $value) 
{
    echo $value . "<br/>";
}




?>