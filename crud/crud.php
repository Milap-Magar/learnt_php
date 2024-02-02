<?php 
    if(isset($_GET['msg'])){
    	echo "<h4>" .$_GET['msg'] ."</h4>";
    }
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>CRUD</title>
   </head>
   <body>
       <h1>Manage Products</h1>
        <?php
         include 'displayProducts.php';
        ?>
        <form method="POST" action="insertProducts.php">
            <fieldset style="width: 15%;">
                <legend>Enter New Product Details</legend>
                <label for="productnameLabel">Product Name : </label>
                <br/>
                <input type="text" name="productName"/>
                <br/>
                <label for="priceLabel">Price : </label>
                <br/>
                <input type="text" name="price"/>
                <br/>
                <label for="imagefileLabel">Image Filename : </label>
                <br/>
                <input type="text" name="imageFile"/>
                <br/>
                <br/>
                <input type="submit" name="submit" value="Submit"/>
                <input type="reset" name="clear" value="Clear"/>
            </fieldset>
        </form>
   </body>
</html>