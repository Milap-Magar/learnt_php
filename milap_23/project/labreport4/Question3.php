<?php

if (isset($_POST['btnRegister'])) {
    $error = 0;
    if (
        isset($_POST['username']) && !empty($_POST['username'])
        && trim($_POST['username'])
    ) {
        $username = $_POST['username'];
        if (strlen($username) < 8) {
            echo ("$username should be minimum 8 character" . '<br/>');
        }
    } else {
        $error++;
        $errUsername = "Enter username";
    }
    if (isset($_POST['email']) && !empty($_POST['email']) && trim($_POST['email'])) {
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo ("$email is a valid email address");
        } else {
            echo ("$email is not a valid email address" . '<br/>');
        }
    } else {
        $error++;
        $errEmail = "Enter email";
    }
    $yearpattern = "/^[0-9]{4}$/";
    if (isset($_POST['year']) && !empty($_POST['year']) && trim($_POST['year'])) {
        $year = $_POST['year'];
        if (!preg_match($yearpattern, $_POST['year'])) {
            echo ("$year is not a valid year" . '<br/>');
        }
    } else {
        $error++;
        $erryear = "Enter year";
    }
    if (isset($_POST['month']) && !empty($_POST['month']) && trim($_POST['month'])) {
        $month = $_POST['month'];
        if ($_POST['month'] > 12) {
            echo ("$month is not a valid month" . '<br/>');
        }
    } else {
        $error++;
        $errmonth = "Enter month";
    }
    if (isset($_POST['day']) && !empty($_POST['day']) && trim($_POST['day'])) {
        $day = $_POST['day'];
        if ($_POST['day'] > 32) {
            echo ("$day is not a valid day" . '<br/>');
        }
    } else {
        $error++;
        $errday = "Enter day";
    }
    $phonepattern = "/^[97-98]+[0-9]{8}+$/";
    if (isset($_POST['phone']) && !empty($_POST['phone']) && trim($_POST['phone'])) {
        $phone = $_POST['phone'];
        if (!preg_match($phonepattern, $_POST['phone'])) {
            echo ("$phone is not a valid phone" . '<br/>');
        }
    } else {
        $error++;
        $errPhone = "Enter phone number";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <style type="text/css">
        * {
            margin: 5px;
        }
    </style>
</head>

<body>
    <h1>Login Form</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="<?php echo isset($username) ? $username : "" ?>"
            placeholder="Enter username" />
        <?php echo (isset($errUsername)) ? $errUsername : ''; ?>
        <br />
        <label for="email">Email</label>
        <input name="email" value="<?php echo isset($email) ? $email : "" ?>" placeholder="Enter email" />
        <?php echo (isset($errEmail)) ? $errEmail : ''; ?>
        <br />
        <label for="dob">dob</label>
        <input type="number" value="<?php echo isset($year) ? $year : "" ?>" name="year" placeholder="yyyy" />-
        <input type="number" value="<?php echo isset($month) ? $month : "" ?>" name="month" placeholder="mm" />-
        <input type="number" value="<?php echo isset($day) ? $day : "" ?>" name="day" placeholder="dd" />
        <?php echo (isset($erryear)) ? $erryear : ''; ?>
        <?php echo (isset($errmonth)) ? $errmonth : ''; ?>
        <?php echo (isset($errday)) ? $errday : ''; ?>
        <br />
        <label for="phone">phone</label>
        <input type="number" value="<?php echo isset($phone) ? $phone : "" ?>" name="phone" placeholder="Enter phone" />
        <?php echo (isset($errPhone)) ? $errPhone : ''; ?>
        <br />
        <input type="submit" name="btnRegister" id="Register" value="Register">
    </form>
</body>

</html>