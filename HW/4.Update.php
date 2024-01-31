<pre>
    <?php
    error_reporting(E_ALL);

    try {
        $connection = mysqli_connect('localhost', 'root', '', 'db_23_milap_lab');

        $sql = 'UPDATE  tbl_students_23
            SET name = "admin",
            roll = 16,
            email = admin@info.com,
            phone = 91923812731,
            program = B.Hons IT,
            semester = 4th,
            WHERE id = 3
        ';
        if (mysqli_query($connection, $sql)) {
            echo "Student Inserted Successfully";
        } else {
            echo "Failed to Insert Product";
        }
    } catch (Exception $ex) {
        die('Database Error' . $ex->getMessage());
    }

    ?>