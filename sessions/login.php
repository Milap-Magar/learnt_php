<?php
    session_start();
    //include init.php
    include 'init.php';
 
    //Gather details submitted from the $_POST array and store in local vars
    if(isset($_POST['subLogin'])){
        $txtUser = $_POST['txtUser'];
        $txtPass = $_POST['txtPass'];
        
        //build query to SELECT records from the users table WHERE
        //the username AND password in the table are equal to those entered
        $query = "select * from users where username = '$txtUser' and password = '$txtPass'";
        
        //run query and store result
        $result = mysqli_query($connection, $query);
        
        // check result and generate message with code below
        if($row = mysqli_fetch_assoc($result)){
	        $_SESSION['user']=$txtUser;
            header('Location:sessions.php');
            exit;
        }
        
        else{
            $_SESSION['error'] = 'User not recognised';
            header('Location:sessions.php');
            exit;
        } 
    }
?>
