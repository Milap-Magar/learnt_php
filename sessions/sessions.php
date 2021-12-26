<?php
        session_start();
        //include init.php so session vars can be used
        include 'init.php';
 
        //Use an if statement to determine whether the session var holding 
        //the user name ($_SESSION['user'] has been set.  If it has, echo out 
        //a welcome message for the user, followed by a links to a pages 
        //called protected.php and logout.php.
        if(isset($_SESSION['user'])){
            echo 'Welcome, ' .ucfirst(strtolower($_SESSION['user']));
            echo '<br/><br/>';
            echo '<a href = "protected.php">Protected</a> | <a href = "logout.php">Log Out</a>';
        }

        //add an else section that will include loginform.php and display any 
        //error message that is held in ($_SESSION['error'])
        else{
            include 'loginform.php';
            echo @$_SESSION['error'];
        }
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Sessions</title>
   </head>
   <body>
   </body>
</html>