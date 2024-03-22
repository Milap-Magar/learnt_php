<?php
$phone = $_POST['phone'];
try{
   $connection = mysqli_connect('localhost','root','','db_anjil');
    $sql = "select * from tbl_numbers where phone='$phone'";
    $result = mysqli_query($connection,$sql);
    if(mysqli_num_rows($result)  == 0){
        echo 'Phone number is unique';
    } else {
        echo 'Phone number is already taken';
    }
}catch(Exception $ex){
    die('Database Error: ' . $ex->getMessage());
}

?>
