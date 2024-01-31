<!-- <pre> -->
<?php
if (isset($_POST["btnUpload"])) {
    if ($_FILES['cv']['error'] == 0) {
        // print_r($_FILES);
        if ($_FILES["cv"]["size"] < 200000) {
            $filetype = ['application/pdf', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
            if (in_array($_FILES['cv']['type'], $filetype)) {
                $filename = uniqid() . '.' . $_FILES['cv']['name'];
                if (move_uploaded_file($_FILES['cv']['tmp_name'], 'file/' . $filename)) {
                    echo 'upload success';
                } else {
                    echo 'upload failed';
                }
            } else {
                echo "File type must be docx/pdf";
            }
        } else {
            echo "File  must be below 2mb";
        }
    } else {
        echo "File upoad error";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- add new attribute into the form:
        enctype="multipart/form-data"
        use $_FILES array to access file information
    -->
    <form action="" method="post" enctype="multipart/form-data">
        <label for="cv">CV</label>
        <input type="file" name="cv" />
        <br />
        <input type="submit" name="btnUpload" value="Upload"></button>
    </form>
</body>

</html>