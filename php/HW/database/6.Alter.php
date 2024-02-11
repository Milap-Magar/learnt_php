<?php
error_reporting(E_ALL);
try{
    $connection=mysqli_connect('localhost','root','','db_23_milap_lab');
    $sql="ALTER TABLE  tbl_Students_23 ADD Address varchar(40)";
    if(mysqli_query($connection,$sql)){
        
        echo'Table column Added!!!';
    }
    else{
        echo'Failed to ADD column!!!';
    }
}
catch(exception $ex){
    die('Database Error:'.$ex->getMessage());
}
?>