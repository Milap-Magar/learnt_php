<?php

if (isset($_POST['btnSave'])) {
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $program = $_POST['program'];
    $semester = $_POST['semester'];

    $error = [];
    if (isset($_POST['name']) && !empty($_POST['name']) && trim($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $error['name'] = 'Enter Name';
    }

    if (isset($_POST['email']) && !empty($_POST['email']) && trim($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $error['email'] = 'Enter email';
    }

    if (isset($_POST['phone']) && !empty($_POST['phone']) && trim($_POST['phone'])) {
        $phone = $_POST['phone'];
    } else {
        $error['phone'] = 'Enter phone';
    }

    if (isset($_POST['program']) && !empty($_POST['program']) && trim($_POST['program'])) {
        $program = $_POST['program'];
    } else {
        $error['program'] = 'Enter program';
    }

    if (isset($_POST['semester']) && !empty($_POST['semester']) && trim($_POST['semester'])) {
        $semester = $_POST['semester'];
    } else {
        $error['semester'] = 'Enter semester';
    }

    if (count($error) == 0) {
        try {
            $connection = mysqli_connect('localhost', 'root', '', 'db_23_milap_lab');
            $sql = "INSERT INTO tbl_students_20 (name, email, phone, program, semester) VALUES ('$name','$email','$phone','$program','$semester')";
            if (mysqli_query($connection, $sql)) {
                echo 'Profile Added!';
            } else {
                echo 'Failed to Add Profile';
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
    <title>File Handling</title>
</head>

<body>
    <h2>Form</h2>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" />
        <span>
            <?php echo isset($error['name']) ? $error['name'] : '' ?>
        </span>
        <br />
        <label for="email">Email:</label>
        <input type="email" name="email" />
        <span>
            <?php echo isset($error['email']) ? $error['email'] : ''; ?>
        </span>
        <br />
        <label for="phone">Phone:</label>
        <input type="number" name="phone" />
        <span>
            <?php echo isset($error['phone']) ? $error['phone'] : ''; ?>
        </span>
        <br />
        <label for="program">Program: </label>
        <select name="program">
            <option>Select Program</option>
            <option>BCA</option>
            <option>BIT</option>
            <option>BSC CsIT</option>
            <option>BIM</option>
        </select>
        <span>
            <?php echo isset($error['program']) ? $error['program'] : ''; ?>
        </span>
        <br />
        <label for="semester">Semester: </label>
        <select name="semester">
            <option value="">Select Semester</option>
            <option value="1st">First</option>
            <option value="2nd">Second</option>
            <option value="3rd">Third</option>
            <option value="4th">Fourth</option>
            <option value="5th">Fifth</option>
            <option value="6th">Sixth</option>
            <option value="7th">Seventh</option>
            <option value="8th">Eigthth</option>
        </select>
        <span>
            <?php echo isset($error['semester']) ? $error['semester'] : ''; ?>
        </span>
        <br />
        <button type="submit" name="btnSave">Save</button>
    </form>
</body>

</html>