<pre>
<?php

$intVar = 143;
$floatVar = 3.15454;
$stringVar = "Hello, Everyone!";
$boolVar = false;
$arrayVar = array(1, 2, 3, "cat", "dog");
$assocArrayVar = array("name" => "Rohan", "age" => 21, "city" => "KTM");
$nullVar = null;
class MyClass
{
    public $fname = "Rohan 1";
    public $lname = "Thapa 2";
}

$objVar = new MyClass();

var_dump($intVar);
var_dump($floatVar);
var_dump($stringVar);
var_dump($boolVar);
var_dump($arrayVar);
var_dump($assocArrayVar);
var_dump($nullVar);
var_dump($objVar);

?>