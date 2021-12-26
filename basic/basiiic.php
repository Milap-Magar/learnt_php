<!DOCTYPE html>
<html>
<head>
	<title>Basics</title>
</head>
<body>
	<?php
	echo "<h1>Sudeepa Bajracharya</h1>";
	echo "<br/>";
	?>
	<h1>Variables.</h1>
	<?php
	$name = "Sudeepa";
	$age = 20;
	echo "Hi my name is ".$name."and I am ".$age." years old.";
	echo "<br/>";
	?>
	<?php
	echo "Mi nombre es Sudeepa y tengo 20 anos de edad";
	echo "<h3> Functions.</h3>";
	echo gettype($name);//return in which type the given variable is written in.
	echo "<br/>";
	echo strlen($name);// return the length of the given variable
	echo "<br/>";
	echo strtoupper($name);//returns the value in uppercase.
	echo "<br/>";
	?>
	<?php
	$num1 = 9;
	$num2 = 12;
	echo "<br/>";
	echo "<br/>";
	echo "num1 * num2 = ". $num1*$num2;
	echo "<br/>";
	echo "num1 as a percentage of num2 = ". $num1 / $num2 * 100;
	echo "<br/>";
	echo "num2 divided by num = ". $num2 % $num1;
	?>
	<?php
	$name =	"Sudeepa";
	$age = 20;
	$height = 1.6;
	$height_inches = ($height * 100)/2.54;
	$height_feet = $height_inches /12;
	echo "<br/>";
	echo "<br/>";
	echo "Name: ".$name;
	echo "<br/>";
	echo "Age: ".$age;
	echo "<br/>";
	echo "Height in meters: ".$height;
	echo "<br/>";
	echo "Height in feet and inches: ".$height_feet;
	?>
</body>
</html>