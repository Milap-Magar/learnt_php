<?php
if (isset($_POST['btn'])) {
    if (isset($_POST['email']) && !empty($_POST['email']) && trim($_POST['email'])) {
        echo "Email is " . $_POST("email");
    }else{
        $errEmail = "Enter Email";
    }
    if (isset($_POST['password']) && !empty($_POST['password']) && trim($_POST['password'])) {
        echo "Password is " . $_POST("password");
    }else{
        $errPassword = "Enter Password";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>

    <style>
        main {
            display: flex;
            justify-content: center;
        }

        form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 40vw;
            height: 50vh;
            background: cyan;
            border: 2px black solid;
            border-radius: 50px;
        }
        h2{

        }
        .input_section {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: start;
            gap: 10px;
        }
    </style>
</head>

<body>
    <main>
        <form action="" method="POST">
            <h2>LOGIN PAGE</h2>
            <div class="input_section">
                <label for="email" name="email">Email</label>
                <input type="email" name="email">
                <label><?php echo isset($errEmail)? $errEmail:''; ?></label>

                <label for="password" name="password">Password</label>
                <input type="password" name="password">
                <label><?php echo isset($errPassword) ? $errPassword : "" ?></label>

                <button name="btn" type="submit">Login</button>
            </div>
        </form>
    </main>
</body>

</html>