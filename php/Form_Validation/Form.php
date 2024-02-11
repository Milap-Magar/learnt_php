<?php
if (isset($_POST["btnSave"])) {

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation</title>
    <style>
        input {
            padding: 5px;
        }

        .main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            gap: 10px;
        }

        .form-section {
            display: flex;
            flex-direction: column;
            align-items: start;
            gap: 10px;
        }

        .dropdown {
            margin: 10px 0px;
            display: flex;
            gap: 10px;
        }

        button {
            padding: 5px;
        }
    </style>
</head>


<body>
    <div class="main">
        <h1>Form Validation</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="form-section">
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="Enter your name">

                <label for="roll">Roll No</label>
                <input type="text" name="roll" placeholder="Enter your Roll Number">

                <label for="phone">Phone</label>
                <input type="number" name="phone" placeholder="Enter your Phone number">

                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Enter your email">

                <div class="dropdown">
                    <label for="program">Program</label>
                    <select name="value">
                        <option>BCA</option>
                        <option>BIM</option>
                        <option>BIT</option>
                        <option>BBIM</option>
                        <option>BSc. CSIT</option>
                        <option>B.hons IT</option>
                    </select>

                    <label for="semester">Semester</label>
                    <select name="value">
                        <option value="1">first</option>
                        <option value="2">second</option>
                        <option value="3">third</option>
                        <option value="4">forth</option>
                        <option value="5">fifth</option>
                        <option value="6">sixth</option>
                        <option value="7">seventh</option>
                        <option value="8">eight</option>
                    </select>
                </div>

                <button name="btnSave">
                    Add Student
                </button>
            </div>
        </form>
    </div>
</body>

</html>