<?php 
error_reporting(E_ALL);

try {
    $connection = mysqli_connect("localhost","root","","");

    $sql = "CREATE DATABASE IF NOT EXISTS db_milap";
    if(mysqli_query($connection, $sql)) {
        $connection = mysqli_connect("localhost","root","","db_milap");

        $sql = "CREATE TABLE IF NOT EXISTS Serial(SSN int AUTO_INCREMENT NOT NULL PRIMARY KEY, Name varchar(16), Address varchar(16))";
        if(mysqli_query($connection, $sql)) {
            $sql = "INSERT INTO Serial(Name, Address)VALUES('Jewan','Korea'),('Dilip','Japan')";
            if(mysqli_query($connection, $sql)){
                echo "Data Inserted Successfully";
            }
        }
    }
} catch (Exception $e) {
    die("Exception:". $e->getMessage());
}
?>