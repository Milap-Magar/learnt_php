<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //store data into session
        $_SESSION['name'] = 'PMC';
        print_r($_SESSION);
        //remove single data
         unset($_SESSION['name']);
         //remove all session data
        // session_destroy();  
        // print_r($_SESSION);
        //start cookie
        setcookie('college','Patan',time()+10);
        print_r($_COOKIE);
    ?>
</body>
</html>