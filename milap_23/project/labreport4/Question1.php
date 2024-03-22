<?php
if (isset($_COOKIE['username'])) {
    session_start();
    $_SESSION['username'] = $_COOKIE['username'];
    $_SESSION['login_time'] = time();
    header('location:dashboard.php');
}

if (isset($_POST['btnLogin'])) {
    $error = 0;
    if (
        isset($_POST['username']) && !empty($_POST['username'])
        && trim($_POST['username'])
    ) {
        $username = $_POST['username'];
    } else {
        $error++;
        $errUsername = "Enter username";
    }
    if (isset($_POST['password']) && !empty($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        $error++;
        $errPassword = "Enter password";
    }
    if ($error == 0) {

        //check valid login
        if ($username == 'rohan' && $password == 'rohan123') {
            session_start();
            //store data into session
            $_SESSION['username'] = $username;
            $_SESSION['login_time'] = time();

            if (isset($_POST['remember'])) {
                //store cookie
                setcookie('username', $username, time() + 24 * 60 * 60);
            }

            header('location:dashboard.php');
        } else {
            echo 'Wrong Credentials';
        }
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
    <p>
        <?php if (isset($_GET['msg']) && $_GET['msg'] == 1) {
            echo 'Please login to continue to access your dashboard';
        } else if (isset($_GET['msg']) && $_GET['msg'] == 2) {
            echo 'Session timeout!! please login to continue';
        }
        ?>
    </p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" value="<?php echo isset($username) ? $username : "" ?>" id="username"
            placeholder="Enter username" />
        <?php echo (isset($errUsername)) ? $errUsername : ''; ?>
        <br />
        <label for="password">Password</label>
        <input type="password" name="password" value="<?php echo isset($password) ? $password : "" ?>"
            placeholder="Enter password" />
        <?php echo (isset($errPassword)) ? $errPassword : ''; ?>
        <br />
        <input type="checkbox" name="remember" id="remember" value="remember" />Remember me
        <br />
        <input type="submit" name="btnLogin" id="login" value="login">
    </form>
</body>

</html>