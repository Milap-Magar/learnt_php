<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOKSEWA FORM</title>
    <style>
        .main-wrapper {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        .main-form {
            width: 500px;
            height: 80vh;
            display: flex;
            flex-direction: column;
            align-items: start;
        }
        .sub-wrapper{
            width: 400px;
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>

    <?php
    $nameErr = "";
    $emailErr = "";
    $mobilenoErr = "";
    $genderErr = "";
    $agreeErr = "";
    $name = "";
    $email = "";
    $mobileno = "";
    $gender = "";
    $website = "";
    $agree = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //String Validation  
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = $_POST["name"];
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $nameErr = "Only alphabets and white space are allowed";
            }
        }

        //Email Validation   
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = $_POST["email"];
            // check that the e-mail address is well-formed  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        //Number Validation  
        if (empty($_POST["mobileno"])) {
            $mobilenoErr = "Mobile no is required";
        } else {
            $mobileno = $_POST["mobileno"];
            // check if mobile no is well-formed  
            if (!preg_match("/^[0-9]*$/", $mobileno)) {
                $mobilenoErr = "Only numeric value is allowed.";
            }
            //check mobile no length should not be less and greator than 10  
            if (strlen($mobileno) != 10) {
                $mobilenoErr = "Mobile no must contain 10 digits.";
            }
        }

        //Gender Field Validation  
        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = $_POST["gender"];
        }

        //Checkbox Validation  
        if (!isset($_POST['agree'])) {
            $agreeErr = "Accept terms of services before submit.";
        } else {
            $agree = $_POST["agree"];
        }
    }
    ?>

    <div class="main-wrapper">
        <h2>Registration Form</h2>
        <!-- <span class="error">* required field </span> -->
        <form method="post" action="<?php echo ($_SERVER["PHP_SELF"]); ?>" class="main-form">
            <div class="sub-wrapper">
                <label> Name: </label>
                <input type="text" name="name">
                <span class="error">*
                    <?php echo $nameErr; ?>
                </span>
            <label> Email: </label>
            <input type="text" name="email">
            <span class="error">*
                <?php echo $emailErr; ?>
            </span>
            <label> Mobile No: </label>
            <input type="text" name="mobileno">
            <span class="error">*
                <?php echo $mobilenoErr; ?>
            </span>
            <div class="inp-radio">
                <label> Gender: </label>
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female
                <input type="radio" name="gender" value="other"> Other
            </div>
            <span class="error">*
                <?php echo $genderErr; ?>
            </span>
            Agree to Terms of Service:
            <input type="checkbox" name="agree">
            <span class="error">*
                <?php echo $agreeErr; ?>
            </span>
            <input type="submit" name="submit" value="Submit">
            </div>
        </form>
    </div>

    <!-- //success case -->
    <?php
    if (isset($_POST['submit'])) {
        if ($nameErr == "" && $emailErr == "" && $mobilenoErr == "" && $genderErr == "" && $agreeErr == "") {
            echo "<h3 color = #FF0001> <b>You have sucessfully registered.</b> </h3>";
            echo "<h2>Your Input:</h2>";
            echo "Name: " . $name;
            echo "<br>";
            echo "Email: " . $email;
            echo "<br>";
            echo "Mobile No: " . $mobileno;
            echo "<br>";
            echo "Gender: " . $gender;
        } else {
            echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";
        }
    }
    ?>

</body>

</html>