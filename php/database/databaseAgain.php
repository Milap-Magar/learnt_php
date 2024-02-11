<?php
error_reporting(E_ALL);

try {
    $connection = mysqli_connect("localhost", "root", "", "");

    $sql = "CREATE DATABASE IF NOT EXISTS db_23_milap_lab";
    if (mysqli_query($connection, $sql)) {
        $connection = mysqli_connect("localhost", "root", "", "db_23_milap_lab");

        $sql = "SELECT * from db_milap";
        $result = mysqli_query($connection, $sql);
        $store = [];
        if (mysqli_num_rows($result) > 0) {
            while ($data = mysqli_fetch_assoc($result)) {
                array_push($store, $data);
            }
        }
    }
} catch (Exception $e) {
    die("Exception:" . $e->getMessage());
}

// mysqli_query()
// obj, assoc, row, array
?>