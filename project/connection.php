<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "blog";
try {
  $conn = mysqli_connect($server, $username, $password, $dbname);
} catch (Exception $e) {
  die('Ex : ' . $e->getMessage());
}
?>