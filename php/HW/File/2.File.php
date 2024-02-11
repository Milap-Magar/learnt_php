<?php
if (isset($_POST["btnSave"])) {
    $error = [];
    if (isset($_FILES['file'])) {
        $file = $_FILES['file'];
        if ($file['error'] == 0) {
            if ($file['size'] < 20000000) {
                $filetype = ['application/pdf', 'application/docx'];
                if (in_array($file['type'], $filetype)) {
                    $filename = uniqid() . $file['name'];
                    $filesave = move_uploaded_file($file['tmp_name'], 'files/' . $filename);
                    if ($filesave) {
                        echo 'File has been Uploaded.';
                    } else {
                        $error['file'] = 'Upload Failed';
                    }
                } else {
                    $error['file'] = 'File should be in .pdf or .docx';
                }
            } else {
                $error['file'] = 'File Size should be less than 2MB';
            }
        } else {
            $error['file'] = 'Error in File';
        }
    } else {
        $error['file'] = 'File Upload Failed';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cv Upload</title>
    <style>
        .main{
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        button{
            width: 75px;
            height: 50px;
        }
    </style>
</head>

<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data" class="main">
        <label for="">file uploader</label>
        <input type="file" name="file" />
        <span>
            <?php echo isset($error['file']) ? $error['file'] : ''; ?>
        </span>
        <button name="btnSave">Upload</button>
    </form>
</body>

</html>