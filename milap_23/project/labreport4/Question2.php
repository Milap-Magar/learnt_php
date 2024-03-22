<?php
if(isset($_POST['btnUpload']))
{
    if($_FILES['document']['error'] == 0){
        if($_FILES['document']['size'] < (1*1024*1024)){
            $filetype = ["application/vnd.openxmlformats-officedocument.wordprocessingml.document","application/pdf"];
            if(in_array($_FILES['document']['type'],$filetype)){
                $filename = uniqid() . '_' . $_FILES['document']['name'];
                if(move_uploaded_file($_FILES['document']['tmp_name'],'documents/' .$filename)){
                    echo 'Upload Success';
                } else {
                    echo 'Upload failed';
                }
            } else {
                echo 'File type must be docx/pdf';
            }
        } else {
            echo 'File size must be below 1mb';
        }
    } else {
        echo 'Fileupload Error';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CV</title>
    <style type="text/css">
        *{
            margin:5px;
        }
        </style>
</head>
<body>
    <h1>CV</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        <label for="document">Document</label>
        <input type="file" name='document' />
        <br/>
        <input type="submit" name='btnUpload' value="Upload" />
    </form>
</body>
</html>