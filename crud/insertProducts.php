<?php
    //Make connection to database
    include 'connection.php';
 
    //Gather from $_POST[]all the data submitted and store in variables
    if(isset($_POST['submit'])){

        $productName = $_POST['productName'];
        $price = $_POST['price'];
        $imageFile = $_POST['imageFile'];
        $validatedproductName = filter_var($productName,FILTER_SANITIZE_STRING); //FILTER_SANITIZE_STRING removes tags and remove or encode special characters from strings
        $validatedPrice = filter_var($price, FILTER_VALIDATE_INT);
        $validatedInt = is_numeric($validatedPrice);

        if(!empty($productName) && !empty($price) && !empty($imageFile)){
            if($validatedproductName){
                if($validatedInt){
                    if($validatedPrice){
                        //Construct INSERT query using variables holding data gathered
                         $query = "INSERT into products(ProductName, ProductPrice, ProductImageName) values ('$validatedproductName', '$validatedPrice', '$imageFile')";

                        //run $query
                        $result = mysqli_query($connection, $query);

                        if($result){
                            header("Location: crud.php?msg= Succesfully Inserted!");
                        }

                        else{
                            //return to calling page(stored in the server variables)
                            header("Location: crud.php?msg= Not Inserted!");
                        }
                    }
                }
                else{
                    header("Location: crud.php?msg=Price should be of Integer Type");
                }
            }
            else{
                header("Location: crud.php?msg=Please enter a valid Product Name");
            }
        }

        else{ 
            header("Location: crud.php?msg=Please fill all fields");
        }

    }
?>
