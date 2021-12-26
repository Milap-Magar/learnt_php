<!DOCTYPE html>
<html>
<head>
	<title>Basics</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, inital-scale=1.0">
</head>
<body>
</body>
</html>

<?php
	echo "<h1>Bipul Pradhan</h1>";
	echo "<br/>";
	?>

<?php

    echo "Name : Bipul Pradhanx <br/> ID: C7261148 <br/>"; //My first PHP
    ?>

    

    <h1>Variables.</h1>
    
    <?php

    //Declaring two Variables
    $name = "Bipul";
    $age = 20;

    //Using the variables, single quotes and concatenation
    echo 'Hi my name is ' .$name. ' and I am ' .$age. ' years old';
    echo "<br/>";

    echo "Mi nombre es Bipul y tengo 20 anos de edad";


    //Adding a heading named as Functions
    echo " <h3>Functions</h3> ";

    //gettype() returns the type of a variable.
    echo gettype($name);
    echo '<br />';
    //strlen() returns the length of the given string.
    echo strlen($name);
    echo '<br />';
    //strtoUpper() converts the given string to UPPERCASE.
    echo strtoUpper($name);

    //Adding a heading named as Arithmetic
    echo " <h3>Arithmetic</h3> ";

    //Declaring two new variables and assigning them a numeric value
    $number1 = 9;
    $number2 = 12;

    $multiplication = ($number1 * $number2);

    $percentage = ($number1/$number2)*100;

    $division = ($number2 / $number1);

    $remainder = ($number2 % $number1);

    echo "Number 1 = $number1 <br/>";
    echo "Number 2 = $number2 <br/>";
    echo "Number 1 x Number 2 = $multiplication <br/>";
    echo "Number 1 as percentage of Number 2 = " .number_format($percentage,2). "<br/>";
    echo "Number 2 divided by Number 1 = " .number_format($division,0). " remainder " .$remainder."<br/>";

    //Calculating height in feet and inches then displaying it
    $height_in_meters = 1.72;
    $height_in_inches = ($height_in_meters*100) / 2.54;
    $height_in_feet = $height_in_inches / 12;
    $height_on_feet_and_inches = $height_in_inches % 12;

    echo "<br/>Name : $name <br/>";
    echo "Age : $age <br/>";
    echo "Height in Meters : $height_in_meters m<br/>";
    echo "Height in Feet and Inches: " .floor($height_in_feet). " ft " .floor($height_on_feet_and_inches). " inch";

?>
