<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database_name = 'L52021e';

//<?php 
    //Set up the database access credentials
    $hostname = 'localhost'; 
    $username = 'root'; //your standard uni id
    $password = '';  // the password found on the W: drive
    $databaseName = 'C7261148'; //the name of the db you are using on phpMyAdmin
    //$connection = mysqli_connect($hostname, $username, $password, $databaseName) or exit("Unable to connect to database!");




//creat connection 

$conn = new mysqli($servername, $username, $password, $database_name);




//check connection 

if ($conn->connect_error) {
  die(" connection faild :" . $conn->connect_error);
}
echo " conncetd successfully";
?>