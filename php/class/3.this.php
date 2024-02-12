<?php
class Person
{
    public $name, $email, $phone, $address;
    #Constructor: function used for data initialization 
    public function __construct($name, $email, $phone, $address)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;
    }
    function printData()
    {
        echo "My name is " . $this->name . " and my email is " . $this->email . " and this is my " . $this->phone . " and my address is " . $this->address ;
    }
    #Destructor: This is used inorder to clear the memory.
    function __destruct()
    {
        echo "I am finished";
    }
}

$ram = new Person("Ram", "info@clk.com", 98400281581, "Ekantakuna");
$ram->printData();
unset($ram);
echo "<br />";
$rita = new Person("Rita", "info@clk.com", 89129381923, "Sanepa");
$rita->printData();
?>