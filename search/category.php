<?php
    include 'session_check.php';

    if(isset($_GET['category'])){
        
        $category = $_GET['category'];

        include 'connection.php';


        $query = "SELECT * from products where ProductName = '$category'";

        $result = mysqli_query($connection,$query);

        if(mysqli_num_rows($result)>=1){
            echo "<table border=1 style = 'text-align:center; margin: 20% 0 0 40%;'>
            <tr>
                <td>Product Image</td>
                <td>Product Name</td>
                <td>Product Price</td>
            </tr>";
            while($row = mysqli_fetch_assoc($result))
            {
                echo "<tr><td><img src='images/".$row['ProductImageName']."'></td>";
                echo "<td>".$row['ProductName']."</td>";
                echo "<td>".$row['ProductPrice']."</td>";
            }

            echo "</tr>";
            echo "</table>";
        
        }

        else{
            echo "<br><br><h3 style='text-align:center; margin:0 auto;'>No Results Found for ".$category." .......... :( </h3>";
        }


    }

?>