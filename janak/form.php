<?php

include 'lab1.php';

if (isset($_POST['submit'])) {
    echo (" type submit");
    $name = $email = $password =  $date = "";
    // varibles to define errors
    $Err = "";
    if (empty($_POST["username"])) {
        $Err = "Name is required";
    } else {
        $name = $_POST["username"];
    }
    if (empty($_POST["email"])) {
        $Err = "Email is required ";
    } else {
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $Err = " Enter a valid Email";
        } else {
            $email = $_POST["email"];
        }
    }
    if (empty($_POST["password"])) {
        $Err = "password is required ";
    } else {
        if (
            // mandatory matches
            strlen($_POST["password"]) > 6   &&     // enforce length
            preg_match('/[a-z]/', $_POST["password"]) &&     // contains lowercase
            preg_match('/[A-Z]/', $_POST["password"])        // contains uppercase
        ) {
            $password = password_hash(
                $_POST["password"],
                PASSWORD_DEFAULT
            );
        } else {
            $Err = 'Enter password With a capital letter and a lowercase ';
        }
    }

    if (empty($_POST["date"])) {
        $Err = "date is required ";
    } else {
        $date = $_POST["date"];
    }
    if (filter_has_var(INPUT_POST, 'checkbox_name')) {
        // ...
    } else {
        $Err = "Plz Agree to the terms and condition ";
    }
    // connection to sql and creating the database entry 

    if (empty($Err)) {
        $sql =
            "INSERT INTO users_data (user_name, email, password)
VALUES ('$name', '$email', '$password')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo " Data inserted successfuly";
        } else {
            die(" connection faild :" . $conn->connect_error);
            echo ($conn->connect_error);
        }
    }
} else {
    echo (" not a sumbut");
}

// check if error is 



// check if the radio button is clicked 


// echo $_POST['checkbox_name'];
// form validation 






// form validation 



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h1>Hello, world!</h1>
    <form method="post">
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="username" class="form-control" id="exampleFormControlInput1" placeholder="username" name="username">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>

            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="password" name='password'>

        </div>
        <input type="date" id="date" name='date'>
        <input type="checkbox" name="checkbox_name" value="checkox_value">
        <div class="form-check">
            <!-- <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name='checkbox'> -->

            <label class="form-check-label" for="flexCheckDefault" name='checkbox'>
                Default checkbox
            </label>
        </div>

        <div class="alert alert-primary" role="alert">
            
        </div>
        <button type="submit" class="btn btn-primary" name='submit'>Primary</button>


    </form>


</body>

</html>