<pre>
    <?php
    error_reporting(E_ALL);

    try {
        $connection = mysqli_connect('localhost', 'root', '', 'db_23_milap_lab');
        $sql = 'DELETE FROM tbl_students_23 where ID = 2';
        if (mysqli_query($connection, $sql)) {
            echo "Student DELETED Successfully";
        } else {
            echo "Failed to DELETE Product";
        }
    } catch (\Exception $ex) {
        die('Database Error' . $ex->getMessage());
    }

    ?>