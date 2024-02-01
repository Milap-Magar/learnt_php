//FILE UPLOAD
    if (isset($_FILES['file'])){
        $file = $_FILES['file'];
        if ($file['error'] == 0){
            if($file['size'] < 20000000){
                $filetype = ['application/pdf','application/docx'];
                if (in_array($file['type'], $filetype )){
                    $filename = uniqid(). $file['name'] ;
                    $filesave = move_uploaded_file($file['tmp_name'], 'files/'. $filename);
                    if ($filesave ){
                        echo 'File has been Uploaded.';
                    }
                    else {
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

