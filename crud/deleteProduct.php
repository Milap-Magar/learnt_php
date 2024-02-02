<?php
    //Make connection to database
    include 'connection.php';
    
    //Gather id from $_GET[]
    if(isset($_GET['id'])){
        $deleteuserID = $_GET['id'];

        //Construct DELETE query to remove record where WHERE id provided equals the id in the table
        $query = "delete from products where $deleteuserID  = ProductID";

        //run $query
        $result = mysqli_query($connection, $query);

        // check to see if any rows were affected
        if (mysqli_affected_rows($connection) > 0) {
            //If yes , return to calling page(stored in the server variables)
            header("Location: crud.php");
        }

      else {
            // print error message
            echo "Error in query: $query. " . mysqli_error($connection);
            exit;
      }

    }


 

 

 
		
?>
