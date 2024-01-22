<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Fundamentals</title>
      <link type="text/css" rel="stylesheet" href="main.css" />
   </head>
   <body>
      <header>
         <h1>Bipul Pradhan C7261148</h1> 
      </header>
      
      <section id="container">
         <h1>Fundamentals of PHP</h1>
         <?php
 
		?>
      </section>
      <footer>   
         <small> <a href="../WatIndex.html">Home</a></small>
      </footer>
   </body>
</html>

<?php

    //Adding a heading named as Selection
    echo "<h3> Selection </h3>";

    $day = date('l'); //that is a lower case L
    //echo 'it\'s '.$day;

    //If-Else to determine whether the current day is Wednesday or Not
    if($day=="Wednesday"){
        echo "It's Midweek";
    }

    else{
        echo "It's not Midweek";
    }

    //Finding the current hour (24hr format) using the date function
    date_default_timezone_set('Asia/Kathmandu');
    $time = date('G');
    
    if($time>=0 && $time<12){
        echo"<br/>Good Morning<br/>";
    }
    
    elseif($time>=12 && $time<18){
        echo"<br/>Good Afternoon<br/>";
    }

    elseif($time>=18 && $time<=23){
        echo"<br/>Good Night<br/>";
    }

    else{
        echo "<br/>Invalid Time<br/>";
    }

    //Declaring a variable called password and assigning it a value
    $password = "password";

    //Using if-else to test whether the password is longer than 4 characters and shorter than 10 characters
    if(strlen($password)>4 && strlen($password)<10){
        echo "<br/> Password length is valid<br/>";
    }

 
    else{
        echo "<br/>Password length is invalid<br/>"; 
    }

    //Test to check to see if the password is set to either ‘password’ or ‘username’
    if($password=="password" || $password=="username"){
        echo "Password Valid<br/>";
    }
    
    else{
        echo "Password Invalid<br/>";
    }

    //Ticket Company
    $ticketPrice = 25;
    $age = 15;
    $membership = TRUE;

    if($age<12){
        if($membership==TRUE){
            $discountedTicket_Price = (60/100)*$ticketPrice;
            $totaldiscountedTicket_Price = $ticketPrice - $discountedTicket_Price;
        }
        else{
            $discountedTicket_Price = (50/100)*$ticketPrice;
            $totaldiscountedTicket_Price = $ticketPrice - $discountedTicket_Price;
        }
    }

    elseif($age>=12 && $age<18){
        if($membership==TRUE){
            $discountedTicket_Price = (35/100)*$ticketPrice;
            $totaldiscountedTicket_Price = $ticketPrice - $discountedTicket_Price;
        }
        else{
            $discountedTicket_Price = (25/100)*$ticketPrice;
            $totaldiscountedTicket_Price = $ticketPrice - $discountedTicket_Price;
        }
       
    }

    elseif($age>65){
        if($membership==TRUE){
            $discountedTicket_Price = (35/100)*$ticketPrice;
            $totaldiscountedTicket_Price = $ticketPrice - $discountedTicket_Price;
        }
        else{
            $discountedTicket_Price = (25/100)*$ticketPrice;
            $totaldiscountedTicket_Price = $ticketPrice - $discountedTicket_Price;
        }
    }

    elseif($membership==TRUE){
            $discountedTicket_Price = (10/100)*$ticketPrice;
            $totaldiscountedTicket_Price = $ticketPrice - $discountedTicket_Price;
    }

    else{
         echo "<br/>You are not eligible for Discounts<br/>";
         $totaldiscountedTicket_Price = $ticketPrice;
    }


    //Chaning the value of $membership to Yes/No for the Output on Member
    if($membership==TRUE){
        $membership = "Yes";
    }
    else{
        $membership ="No";
    };

    echo "<br/>Initial Ticket Price : £ $ticketPrice";
    echo "<br/>Age : $age";
    echo "<br/>Member : $membership";
    echo "<br/>Final Ticket Price : £ $totaldiscountedTicket_Price";
    

    //Adding a heading named as Simple Arrays
    echo "<h3> Simple Arrays </h3>";


    //Declaring an array called products and adding values to the Arrays
    $products = array("T-Shirt","Cap","Mug");
    print_r($products); //print_r is an inbuilt function that is used in PHP to print or display the information stored in a variable.
    echo "<br/>";

    //Overwriting the index[1] of the Array
    $products[1] = "Shirt";
    print_r($products);
    echo "<br/>";

    //Adding a value to the array by not specifying an index[]
    $products[] = "Skirt";
    print_r($products);
    echo "<br/>";

    //Printing the Array as per the requirement on the diagram
    echo "<br/>The item at index[2] is: " .$products[2];
    echo "<br/>The item at index[3] is: " .$products[3];

    //Adding a sub-heading named as Associative Arrays
    echo "<h4>Associative Arrays</h4>";

    //Creating an Associative Array called Customer
    $customer = array('CustID'=>12, 'CustName'=>'Sarah', 'CustAge'=>23, 'CustGender'=>'F');
    print_r($customer);

    //Modifying the Customer Array
    echo "<br/>";
    $customer['CustAge'] = 20;
    $customer['CustEmail'] = 'sarah@gmail.com';
    echo "<br/>";
    print_r($customer);

    //Printing the Associative Array as per the requirement on the diagram
    echo "<br/>";
    echo "<br/>The item at index[CustName] is " .$customer['CustName'];
    echo "<br/>The item at index[CustEmail] is " .$customer['CustEmail'];

    //Adding a sub-heading named as Multi-Dimensional Arrays
    echo "<h4>Multi-Dimensional Arrays</h4>";
    $stock = array( "id1" => array("description" => "t-shirt", "price" => 9.99, "stock" =>100, "colour" => array("blue", "green", "red")),
        "id2" => array( "description" => "cap", "price" => 4.99, "stock" =>50, "colour" => array("blue", "black", "grey")),
        "id3" => array("description" => "mug", "price" => 6.99, "stock" =>30, "colour" => array("yellow", "green", "pink")),
    );

    echo "<br/> This is my order: ";

    echo "<br/><br/>";
    echo $stock['id1']['colour'][1];
    echo " ";
    echo $stock['id1']['description'];
    echo "<br/>Price : &pound" .$stock['id1']['price'];
    
    echo "<br/><br/>";
    echo $stock['id2']['colour'][2];
    echo " ";
    echo $stock['id2']['description'];
    echo "<br/>Price : &pound" .$stock['id2']['price'];

    //Adding heading named as Loops
    echo "<h3>Loops</h3>";



    //Adding sub-heading named as While Loop
    echo "<h4>While Loop</h4>";

    $counter = 1;

    while($counter<6){
        echo 'Count: '.$counter.'<br />';
        $counter++; 
    }

    


    //While loop to calculate how much a multiple number of t-shirts
    $shirtPrice = 9.99;
    $counter = 1;

    echo "<br/><table border=1>
        <tr>
            <th>Count</th>
            <th>Shirt Price </th>
        </tr>";

    while($counter<=10){
        $total=$counter*$shirtPrice;
        $counter++;
        
        echo "<tr>
            <td>$counter</td>
            <td>£ " .number_format($total,2). "</td>
            </tr>";        
    }
   echo "</table>";

   //Adding sub-heading named as For Loops
   echo "<h4>For Loops</h4>";

   $names = array("Peter","Kat","Laura","Ali","Popacatepetal");
   for($i=0;$i<5;$i++){
    echo $names[$i] .'<br />';
   }

   //Adding sub-heading named as Foreach Loops
   echo "<h4>Foreach Loops</h4>";
   $names = array("Peter"=>"C123456", "Kat"=>"C654321", "Laura"=>"C987654", "Ali"=>"C654987", "Popacatepetal"=>"C765984");
   foreach($names as $key => $values){
       echo "Name : " .$key. " ID : " .$values. "<br/>";
   }

   $city = array("Peter"=>"LEEDS","Kat"=>"bradford","Laura"=>"wakeField");
   echo "<br/>";
   print_r($city);
   echo "<br/>";
   
   foreach($city as $key => $value){
        $value = ucfirst(strtolower($value));
        $city[$key]=$value;

   }
   print_r($city);
   




   //Extension exercise 
   //Declaring a New Main Heading named as Some Useful Functions
   echo "<h3> Some Useful Functions </h3>";
   $password = "password";
   $passwordtrim = trim($password);
   $passwordhtml = htmlentities($passwordtrim);
   
   echo "Password is : " .$password;

   if(isset($passwordhtml) && !empty($passwordhtml)){
       if(!empty($passwordhtml))
       {
            if(strlen($passwordhtml)>=6 && strlen($passwordhtml)<=8){
                if(is_numeric($passwordhtml)==0){
                    echo "<br/>Password OK";
                    echo "<br/> Password : " .sha1($passwordhtml);
                }
                else{
                    echo "<br/>Password cannnot be a number";
                }
            }
            else{
                echo "<br/>Your password must be between 6 and 8 characters in length";
            }
       }
       
   }
   else{
       echo "<br/>Please enter a password";
   }

?>