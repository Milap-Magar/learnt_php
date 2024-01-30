<?php
error_reporting(E_ALL);
try {
    $connection = mysqli_connect("localhost", "root", "", "");
    $sql = "CREATE DATABASE IF NOT EXISTS db_23_milap_lab";
    if (mysqli_query($connection, $sql)) {
        $connection = mysqli_connect("localhost", "root", "", "db_23_milap_lab");
        $sql = "INSERT INTO tbl_students_23(name, roll, email, phone, program, semester)VALUES
            ('Ram',1,'ramsehwar@gmail.com',981231233,'BCA','1st'),
            ('Sita',2,'sita@gmail.com',981238733,'BCA','3rd'),
            ('Hari',3,'hari@gmail.com',98123122333,'BCA','4th'),
            ('Shyama',4,'shyama@gmail.com',981231233,'BCA','5th'),
            ('Krishna',5,'krishna@gmail.com',98123127933,'BCA','8th')";
        if (mysqli_query($connection, $sql)) {
            echo "<br />";
            echo "Table data Insertion success";
        } else {
            echo "table data Insertion failed";
        }
    }
} catch (Exception $e) {
    die("Exception: " . $e->getMessage());
}
?>