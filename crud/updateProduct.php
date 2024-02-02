<?php
    //Make connection to database
    include 'connection.php';
    
    //Gather data sent from amendProducts.php page
    if(isset($_POST['submit1'])){
        $productID1 = $_POST['hideProductID1'];
        $productName1 = $_POST['productName1'];
        $price1 = $_POST['price1'];
        $imageFile1 = $_POST['imageFile1'];
        
        if(!empty($productName1) && !empty($price1) && !empty($imageFile1)){

            //Produce an update query to update product record for the id provided
            $query = "UPDATE products SET ProductName = '$productName1', ProductPrice='$price1',  ProductimageName
            = '$imageFile1' WHERE ProductID = $productID1";

            $result = mysqli_query($connection,$query);

            //Redirects to crud.php page
            //Also, carries a message after been edited successfully or not as per the situtation
            if($result){
                header( 'Location: crud.php?msg= Product : ' .$productName1. ' Succesfully Edited');
            }
            else{
                header( 'Location: crud.php?msg= Product : ' .$productName1. ' Not Edited');
            }

        }   

    }
?>
