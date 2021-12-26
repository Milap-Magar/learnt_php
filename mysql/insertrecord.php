<?php
    //Make connection to database
    include 'connection.php';

    //(a)Gather from $_POST[]all the data submitted and store in variables
    if(isset($_POST['submit'])){
        $firstName =  $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $dropDown = $_POST['dropDown'];
        $age = $_POST['age'];

        //(b)Construct INSERT query using variables holding data gathered
        $query = "INSERT INTO Customer(FirstName, LastName, Email, Password, Gender, Age) VALUES('$firstName', '$lastName', '$email', '$password','$dropDown','$age')";
        
        //Temporarily echo $query for debugging purposes
       // echo $query;
       // exit();
    
       //connecting to the database and executing the query to insert the value taken from the user
       $query_execution = mysqli_query($connection,$query);

       if($query_execution){
           echo "Record inserted successfully.";
       } else{
           echo "ERROR:<br/> - Could not able to execute <br/> - " .mysqli_error($connection);
       }
       
   }

    
		
?>
