<?php
// String
$stringVar = "Hello, PHP!";
echo "String: $stringVar<br>";

// Integer
$integerVar = 42;
echo "Integer: $integerVar<br>";

// Float
$floatVar = 3.14;
echo "Float: $floatVar<br>";

// Boolean
$boolVar = true;
echo "Boolean: ";
echo $boolVar ? 'true' : 'false';
echo "<br>";

// Array
$arrayVar = array("apple", "banana", "orange");
echo "Array: ";
print_r($arrayVar);
echo "<br>";

// Associative Array
$assocArrayVar = array("name" => "John", "age" => 25, "city" => "New York");
echo "Associative Array: ";
print_r($assocArrayVar);
echo "<br>";

// Null
$nullVar = null;
echo "Null: ";
var_dump($nullVar);
echo "<br>";

// Object
class Car
{
    public $brand;
    public $model;

    public function __construct($brand, $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }
}

$carObject = new Car("Toyota", "Camry");
echo "Object: ";
var_dump($carObject);
?>