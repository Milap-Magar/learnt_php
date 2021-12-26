<?php

include 'lab1.php';
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "image/" . $filename;


    // Get all the submitted data from the form
    $sql = "INSERT INTO image (imge) VALUES ('$filename')";

    // Execute query
    mysqli_query($conn, $sql);

    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        $msg = "Image uploaded successfully";
    } else {
        $msg = "Failed to upload image";
    }
}
$result = mysqli_query($conn, "SELECT * FROM image");
while ($data = mysqli_fetch_array($result)) {
    echo $data['imge'];

?>

    <img src="./images/<?php echo $data['imge']; ?>">


<?php
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Image Upload</title>
    <link rel="stylesheet" type="text/css" href="./stylesheet.css" />
</head>

<body>
    <div id="content">

        <form method="POST" action="" enctype="multipart/form-data">
            <input type="file" name="uploadfile" value="" />

            <div>
                <button type="submit" name="upload">
                    UPLOAD
                </button>
            </div>
        </form>
    </div>

    <div>
        <form action="" method="POST">
            <div class="row">
                <div class="col-md-8">
                    <input type="text" name="stud_id" value="<?php if (isset($_POST['stud_id'])) {
                                                                    echo $_POST['stud_id'];
                                                                } ?>" class="form-control">
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>
    </div>

    <div>
        <H1> Data here</H1>
        <?php

        if (isset($_POST['stud_id'])) {

            $stud_id = $_POST['stud_id'];

            $query = "SELECT * FROM users_data WHERE user_name='$stud_id' ";

            $query_run = mysqli_query($conn, $query);

            if (mysqli_num_rows($query_run) > 0) {
                foreach ($query_run as $row) {
        ?>
                    <div class="form-group mb-3">
                        <label for="">Name</label>
                        <input type="text" value="<?= $row['user_name']; ?>" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Class</label>
                        <input type="text" value="<?= $row['email']; ?>" class="form-control">
                    </div>

        <?php   }
            } else {
                echo "No Record Found";
            }
        }

        ?>

        }

        }


        ?>
    </div>
</body>

</html>