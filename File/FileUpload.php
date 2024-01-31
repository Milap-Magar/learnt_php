<?php
if (isset($_POST["btnUpload"])) {
    if ($_FILES['photo']['error'] == 0) {
        $filetype = ['image/png', 'image/jpeg', 'image/gif', 'image/jpg'];
        if (in_array($_FILES['photo']['type'], $filetype)) {
            $filename = uniqid('') . '_' . $_FILES['photo']['name'];
            if (move_uploaded_file($_FILES['photo']['tmp_name'], $filename)) {
                'image/' . $filename;
                echo 'upload success';
            } else {
                echo 'upload failed ';
            }
        } else {
            echo 'file type musy be jpg/png/img/jpeg';
        }
    } else {
        echo 'File Upload error';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Validation</title>
</head>

<body>
    <h1>FILE UPLOAD</h1>
    <form action="<?php echo $_SERVER ?>"></form>
</body>

</html>