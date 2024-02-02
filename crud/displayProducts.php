<?php
    //Make connection to database
    include 'connection.php';

    //create a query to select all records from products table
    $query = "select * from products";

    //run query and store the result in a variable called $result
    $result = mysqli_query($connection,$query);

    //Use a while loop to iterate through your $result array and display //ProductName, ProductPrice, ProductImageName.
    echo "<table border=1>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Amend</th>
                <th>Delete</th>
            </tr>
        ";

    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row['ProductName']."</td>";
        echo "<td>".$row['ProductPrice']."</td>";
        echo '<td>
                <img src="images/'.$row['ProductImageName'].'" height=80px
            </td>';
        echo "<td>
                <a href = amendProduct.php?id=".$row['ProductID'].">Amend</a>
            </td>";
        echo "<td>
                <a href = deleteProduct.php?id=".$row['ProductID'].">Delete</a>
            </td>";    
        echo "</tr>"; 
    }

    echo "</table>";
    echo "<br/><br/>";

?>
