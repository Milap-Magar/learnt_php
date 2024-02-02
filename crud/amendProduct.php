<?php
    //Make connection to database
    include 'connection.php';
    
    //Gather id sent from crud.php page
    if(isset($_GET['id'])){
        $amendID = $_GET['id'];
        //Produce query to select the product record for the id provided
        $query = "select * from products where ProductID = $amendID";
    
        //run query and store result
        $result = mysqli_query($connection,$query);

        //extract row from result using mysqli_fetch_assoc()and store $row
        if($result){
            while($row1 = mysqli_fetch_assoc($result))
            {
                $ProductID = $row1['ProductID'];
                $ProductName = $row1['ProductName'];
                $ProductPrice = $row1['ProductPrice'];
                $ProductimageName = $row1['ProductImageName'];
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Amend Product</title>
   </head>
   <body>
   <form method="POST" action="updateProduct.php?id=">
            <fieldset style="width: 15%;">
                <legend>Enter Product Details</legend>
                <input type="hidden" name="hideProductID1" value="<?php echo $ProductID;?>"/>
                <label for="productnameLabel1">Product Name : </label>
                <br/>
                <input type="text" name="productName1" value="<?php if(isset($_POST['productName1'])) echo $ProductName;?>"/>
                <br/>
                <label for="priceLabel1">Price : </label>
                <br/>
                <input type="text" name="price1" value="<?php if(isset($_POST['price1'])) echo $ProductPrice;?>"/>
                <br/>
                <label for="imagefileLabel1">Image Filename : </label>
                <br/>
                <input type="text" name="imageFile1" value="<?php if(isset($_POST['imageFile1'])) echo $ProductimageName?>"/>
                <br/>
                <br/>
            </fieldset>
            <input type="submit" name="submit1" value="Submit"/>
            <input type="reset" name="clear1" value="Clear"/>
        </form>
   </body>
</html>