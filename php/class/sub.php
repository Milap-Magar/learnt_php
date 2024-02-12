<?php
class Person
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function celebrateBirthday()
    {
        echo "Happy Birthday, {$this->name}! 🎉\n";
        $this->age++;
        echo "{$this->name} is now {$this->age} years old.\n";
    }
}

// Create an object of the class
$personObject = new Person("John", 25);

// Access the properties
echo "Name: " . $personObject->name . "\n"; // Outputs: John
echo "Age: " . $personObject->age . "\n"; // Outputs: 25

// Call the celebrateBirthday method
$personObject->celebrateBirthday();

?>