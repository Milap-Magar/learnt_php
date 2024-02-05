<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "blog";

$conn = mysqli_connect($server, $username, $password, $dbname);
if (!$conn) {
  die('Failed: ' . mysqli_connect_error());
}
?>