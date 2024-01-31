<?php
error_reporting(E_ALL);
try {
    $connection = mysqli_connect('localhost', 'root', '', 'db_08_Riwaz_lab');
    $sql = "INSERT INTO tbl_Students_08(Name,Roll,Email,Phone,Program ,Semester) VALUES ('Ram',08,'Ram@gmail.com',9800000000,'BCA','1'),('Sam',01,'sam@gmail.com',9800000010,'BBM','4'),('Sita',04,'sita@gmail.com',9800430000,'BHM','5'),('Hari',19,'Hari@gmail.com',9810000000,'BIT','7'),('Shiva',20,'shiva@gmail.com',9800001100,'CSIT','1')";
    if (mysqli_query($connection, $sql)) {
        echo 'Record Inserted!!!';
    } else {
        echo 'Failed to Insert Record!!!';
    }
} catch (exception $ex) {
    die('Database Error:' . $ex->getMessage());
}
?>