<?php
class Person{
    public $id,$name,$address,$phone;
    //constructor
    public function  __construct($n,$id,$p,$a){
        $this->name = $n;
        $this->address= $a;
        $this->id = $id;
        $this->phone = $p;
    }
    function printData(){
        echo '<br/>My name is ' . $this->name;
        echo '<br/>My ID is ' . $this->id;
        echo '<br/>My phone is ' . $this->phone;
        echo '<br/>My address is ' . $this->address;
    }
    function __destruct(){
        echo "I am finished";
    }
}

class Student extends Person{
    public $roll,$email,$course;
    //constructor
    public function  __construct($n,$id,$p,$a,$roll,$course,$email){
       parent::__construct($n,$id,$p,$a);
        $this->email = $email;
        $this->course = $course; 
        $this->roll = $roll;
    }
    function printData(){
       parent::printData();
        echo '<br/>My email is ' . $this->email;
        echo '<br/>My course is ' . $this->course;
        echo '<br/>My roll no is ' . $this->roll;
    }
    function __destruct(){
        echo "I am finished";
    }
}


$ram = new Student('ram',21,985454,'KTM',45,'BCA','info@ram.com','');

$ram->printData();
?>