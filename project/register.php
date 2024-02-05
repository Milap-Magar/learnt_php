<?php
include("connection.php");
if (isset($_POST['btnSave'])) {
    $error = [];
    $success = [];
    if (isset($_POST['name']) && !empty($_POST['name']) && trim($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $error['name'] = 'Name Required!';
    }

    if (isset($_POST['email']) && !empty($_POST['email']) && trim($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $error['email'] = 'Email Required!';
    }

    if (isset($_POST['username']) && !empty($_POST['username']) && trim($_POST['username'])) {
        $username = $_POST['username'];
    } else {
        $error['username'] = 'Username Required!';
    }
    if (isset($_POST['password']) && !empty($_POST['password']) && trim($_POST['password']) && $_POST['password'] >= 4) {
        $password = $_POST['password'];
    } else {
        $error['password'] = 'Password Required!';
    }
    if (isset($_POST['phone']) && !empty($_POST['phone']) && trim($_POST['phone']) && $_POST['phone'] >= 4) {
        $phone = $_POST['phone'];
    } else {
        $error['phone'] = 'Phone Required!';
    }

    if (isset($_POST['address']) && !empty($_POST['address']) && trim($_POST['address']) && $_POST['address'] >= 4) {
        $address = $_POST['address'];
    } else {
        $error['address'] = 'Address Required!';
    }

    if (isset($_POST['website']) && !empty($_POST['website']) && trim($_POST['website']) && $_POST['website'] >= 4) {
        $website = $_POST['website'];
    } else {
        $website = $_POST['website'];
    }

    if (isset($_POST['image']) && !empty($_POST['image']) && trim($_POST['image']) && $_POST['image'] >= 4) {
        $image = $_POST['image'];
    } else {
        $error['image'] = 'image Required!';
    }

    if (count($error) == 0) {
        try {
            $sql = "INSERT INTO users (name, email, phone, address, username, password, website, image) VALUES ('$name', '$email', '$phone', '$address', '$username','$password', '$website', '$image')";
            if (mysqli_query($conn, $sql)) {
                $success['create'] = 'User Created Successfully !';
            } else {
                echo 'Failed to Create User';
            }
        } catch (Exception $ex) {
            die('Database Error: ' . $ex->getMessage());
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Blog</title>
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
            font-weight: bold;
            font-family: monospace;
        }

        .success {
            color: beige;
            text-align: center;
            font-weight: 500;
        }

        form {
            background-color: #fff;
            margin: 100px auto;
            border: 2px solid black;
            padding: 20px;
            border-radius: 5px;
            width: 800px;
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
            flex-direction: row;
            gap: 40px;
        }

        label {
            font-weight: bold;
            padding: 3px 0;
            font-weight: 400;
        }

        form input {
            width: 300px;
            padding: 5px;
            background-color: transparent;
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
            background-color: #0f2027;
            color: #fff;
            font-family: inherit;
            padding: 10px 20px;
            margin: 20px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div>
            <h2>Register Blog</h2>
            <p>
                <?php echo isset($success['create']) ? $success['create'] : ''; ?></span>
            </p>
        </div>
        <div class="field">
            <div>
                <label for="name">Name<span>
                        <?php echo isset($error['name']) ? $error['name'] : ''; ?>
                    </span></label>
                <input type="text" name="name" />
            </div>
            <div>
                <label for="email">Email<span>
                        <?php echo isset($error['email']) ? $error['email'] : ''; ?>
                    </span></label>
                <input type="email" name="email" />
            </div>
        </div>
        <div class="field">
            <div>
                <label for="phone">Phone<span>
                        <?php echo isset($error['phone']) ? $error['phone'] : ''; ?>
                    </span> </label>
                <input type="number" name="phone" />
            </div>
            <div>
                <label for="username">Username<span>
                        <?php echo isset($error['username']) ? $error['username'] : ''; ?>
                    </span></label>
                <input type="text" name="username" />
            </div>
        </div>
        <div class="field">
            <div>
                <label for="password">Password<span>
                        <?php echo isset($error['password']) ? $error['password'] : ''; ?>
                    </span></label>
                <input type="password" name="password" />
            </div>
            <div>
                <label for="address">Address<span>
                        <?php echo isset($error['address']) ? $error['address'] : ''; ?>
                    </span></label>
                <input type="text" name="address" />
            </div>
        </div>
        <div class="field">
            <div>
                <label for="website">Website<span>
                        <?php echo isset($error['website']) ? $error['website'] : ''; ?>
                    </span></label>
                <input type="text" name="website" />
            </div>
            <div>
                <label for="image">Profile Picture<span>
                        <?php echo isset($error['image']) ? $error['image'] : ''; ?>
                    </span></label>
                <input type="file" name="image" />
            </div>
        </div>
        <div class="field">
            <button type="submit" name="btnSave">Create</button>
        </div>
    </form>
</body>

</html>