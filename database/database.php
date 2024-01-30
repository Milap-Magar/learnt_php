<?php
error_reporting(E_ALL);
try {
    // db connection
    $connection = mysqli_connect("localhost", "root", "", "");

    $sql = "CREATE DATABASE IF NOT EXISTS db_23_milap_company";

    if (mysqli_query($connection, $sql)) {
        echo "Database creation success";
        $connection = mysqli_connect("localhost", "root", "", "db_23_milap_company");
        $sql = "CREATE TABLE IF NOT EXISTS php_database_23_milap(SSN int, Name varchar(16))";
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