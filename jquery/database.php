<?php
$username = $_POST['username'];
try{
   $connection = mysqli_connect('localhost','root','','db_pmc_2078_sl');
    $sql = "select * from tbl_users where username='$username'";
    $result = mysqli_query($connection,$sql);
    if(mysqli_num_rows($result)  == 1){
        echo 'Username already taken';
    } else {
        echo 'Username available';
    }
}catch(Exception $ex){
    die('Database Error: ' . $ex->getMessage());
}

?>
