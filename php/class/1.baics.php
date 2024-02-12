<?php

class MyClass
{
    public $publicVariable;
    public $values;

    public function __construct($initialValue)
    {
        $this->publicVariable = $initialValue;
        $this->values = $this->publicVariable;
    }
}

$myObject = new MyClass("Hello, World!");

// Access the properties
echo $myObject->publicVariable;
echo $myObject->values;

?>