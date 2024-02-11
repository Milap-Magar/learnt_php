<?php
error_reporting(E_ALL);
try {
    $connection = mysqli_connect('localhost', 'root', '', 'db_23_milap_lab');
    $sql = "SELECT * FROM tbl_Students_23";
    $result = mysqli_query($connection, $sql);
    $Students = [];
    if (mysqli_num_rows($result) > 0) {
        while ($record = mysqli_fetch_assoc($result)) {
            array_push($Students, $record);
        }
    } else {
        echo 'Data not found!sorry!';
    }
} catch (exception $ex) {
    die('ERROR:' . $ex->getMessage());
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listing Students</title>
</head>

<body>
    <div class="main-wrapper">
        <h2>student table</h2>
        <table border="1">
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Roll</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Program</th>
                <th>Semster</th>
            </tr>
            <tr <?php foreach ($Students as $index => $Student) { ?>>
                    <td>
                        <?php echo $index + 1 ?>
                    </td>
                    <td>
                        <?php echo $Student['Name'] ?>
                    </td>
                    <td>
                        <?php echo $Student['roll'] ?>
                    </td>
                    <td>
                        <?php echo $Student['email'] ?>
                    </td>
                    <td>
                        <?php echo $Student['phone'] ?>
                    </td>
                    <td>
                        <?php echo $Student['program'] ?>
                    </td>
                    <td>
                        <?php echo $Student['semester'] ?>
                    </td>
                </tr <?php } ?>>
        </table>
    </div>
</body>

</html>