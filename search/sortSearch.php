<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="form-inline my-2 my-lg-0 m-4" method="POST">
                <div class="col-md-12">
                  <label class="label" for="Password">Select Age</label>

                  <select class="form-control" id="select_1" name="thenumbers" placeholder="Select Age">
                    <option>Select Category</option>

                    <option value="1">Sports</option>
                    <option value="2">men wears</option>


                  </select>
                </div>

                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <div class="d-flex m-4" style="border-inline: 2px solid;">

                  <div class="m-2"> <input class="form-check-input" type="radio" name="order" id="flexRadioDefault1" value='name'>
                    <label class="form-check-label" for="flexRadioDefault1" style="color:black;">
                      Name
                    </label>
                  </div>
                  <div class="m-2"> <input class="form-check-input" type="radio" name="order" id="flexRadioDefault2" value='price'>
                    <label class="form-check-label" for="flexRadioDefault1" style="color:black;">
                      Price
                    </label>
                  </div>
                </div>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button>


              </form>
    </div>

<?php 


searchitems();

function searchitems()
        {
            include 'connection.php';


            // If upload button is clicked ...
  
            if (isset($_POST['submit'])) {
  
  
              $search = $_POST['search'];
              $radio = $_POST['order'];
              $dropdown = $_POST["thenumbers"];
  
  
              if ($connection->connect_error) {
                echo "connection Failed: " . $con->connect_error;
              } else {
                if ($radio == "name") {
                  $sql = "SELECT * from category where Category LIKE '%$search%' OR ProductName LIKE '%$search%' ORDER BY ProductName ASC";
                } elseif ($radio == "price") {
                  $sql = "SELECT * from category where Category LIKE '%$search%' OR ProductPrice LIKE '%$search%' ORDER BY ProductPrice ASC";
                } elseif ($dropdown == 1) {
                  $sql = "SELECT * from category where Category = 'Books'";
                } elseif ($dropdown == 2) {
                  $sql = "SELECT * from category where Category = 'Cup'";
                } else {
                  $sql = "SELECT * from category where Name LIKE '%$search%' ";
                }
  
  
                // $sql = "SELECT * FROM product WHERE name  LIKE '%$searchValue%'";
  
                $result = $connection->query($sql);
                while ($row = $result->fetch_assoc()) {
                //   echo $row['Name'] . "<br>";
                //   echo $row['Image'];
              ?>
                  
                  
    <div class="card" style="width: 18rem;">
  <img class="card-img-top"  src="images/<?php echo $row['ProductImageName']  ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['ProductName'] ?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary"><?php echo $row['Price'] ?></a>
  </div>
</div>
  
          <?php
  
                }
              }
            }
            
        }
        ?>
</body>
</html>