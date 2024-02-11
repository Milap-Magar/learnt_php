<?php
error_reporting(E_ALL);
try {
    // db connection
    $connection = mysqli_connect("localhost", "root", "", "");

    $sql = "CREATE DATABASE IF NOT EXISTS db_23_milap_lab";

    if (mysqli_query($connection, $sql)) {
        echo "Database creation success";
        $connection = mysqli_connect("localhost", "root", "", "db_23_milap_lab");
        $sql = "CREATE TABLE IF NOT EXISTS tbl_students_23(Id int AUTO_INCREMENT NOT NULL PRIMARY KEY, Name varchar(16),roll int, email varchar(36),phone int, program varchar(16), semester varchar(8), UNIQUE(roll))";
        if (mysqli_query($connection, $sql)) {
            echo "<br />";
            echo "Table Creation success";
        } else {
            echo "table creation failed";
        }
    }
} catch (Exception $e) {
    echo "Exception:" . $e->getMessage();
}
?>