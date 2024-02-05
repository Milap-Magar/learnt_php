<?php

require("./connection.php");
if (isset($_COOKIE['username'])) {
    session_start();
    $_SESSION['username'] = $_COOKIE['username'];
    $_SESSION['login_time'] = time();
    header('location:dashboard.php');
}

if (isset($_POST['btnLogin'])) {
    $error = [];

    if (
        isset($_POST['username']) && !empty($_POST['username'])
        && trim($_POST['username'])
    ) {
        $username = $_POST['username'];
    } else {
        $error['username'] = 'Username Required!';
    }

    if (isset($_POST['password']) && !empty($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        $error['password'] = 'Password Required!';
    }
    if (sizeof($error) == 0) {

        $userlist = [];
        $sql = "SELECT * FROM users WHERE status = 1";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($userlist, $row);
            }
        } else {
            echo "Data not found";
        }
        $login = false;
        foreach ($userlist as $key => $user) {
            if ($user['Username'] == $username && $user['password'] == $password) {
                $login = true;
                break;
            }
        }
        if ($login) {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['login_time'] = time();

            if (isset($_POST['remember'])) {
                setcookie('username', $username, time() + 7 * 24 * 60 * 60);
            }
            header('location:dashboard.php');
        } else {
            $error['failed'] = 'Login failed';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Login</title>
    <style>
        body {
            background-image: url(bg.jpg);
            font-family: 'Poppins', sans-serif;
        }

        .head {
            display: flex;
            gap: 2px;
        }

        h2 {
            text-transform: uppercase;
            color: #0f2027;
            text-align: center;
            line-height: 0.5;
        }

        p {
            text-align: center;
            color: red;
        }

        .success {
            color: darkgreen;
            text-align: center;
            font-weight: 500;
        }

        form {
            margin: 100px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            width: 450px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        div {
            display: flex;
            flex-direction: column;
        }

        .field {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        label {
            font-weight: bold;
            padding: 3px 0;
            font-weight: 400;
        }

        form input {
            width: 300px;
            padding: 5px;
            background-color: #fff;
            border: 1px solid black;
            border-radius: 5px;
            outline: red;
        }

        div span {
            color: red;
            margin-left: 10px;
        }

        button {
            border-radius: 5px;
            border: none;
            background-color: black;
            color: #fff;
            font-family: inherit;
            padding: 10px 20px;
            margin: 20px;
            cursor: pointer;
        }

        .checkbox {
            display: flex;
            flex-direction: row;
            gap: 10px;
        }

        #remember {
            width: 20px;
        }
    </style>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div>
            <h2>Login Blog Form</h2>
            <p>
                <?php echo isset($error['failed']) ? $error['failed'] : ''; ?></span>
                <?php if (isset($_GET['msg']) && $_GET['msg'] == 1) {
                    echo 'Please login to continue to access your dashboard';
                } else if (isset($_GET['msg']) && $_GET['msg'] == 2) {
                    echo 'Session timeout!! please login to continue';
                }
                ?>
            </p>
        </div>
        <div class="field">
            <div>
                <label for="username">Userame<span>
                        <?php echo isset($error['username']) ? $error['username'] : ''; ?>
                    </span></label>
                <input type="text" name="username" />
            </div>
            <div>
                <label for="password">Password<span>
                        <?php echo isset($error['password']) ? $error['password'] : ''; ?>
                    </span></label>
                <input type="password" name="password" />
            </div>
        </div>
        <div class="checkbox">
            <input type="checkbox" name="remember" id="remember" value="remember">
            <label for="remember">Remember me for 7 days</label>
        </div>
        <div class="field">
            <button type="submit" name="btnLogin" id="login"> Login </button>
            <div>
    </form>
</body>

</html>