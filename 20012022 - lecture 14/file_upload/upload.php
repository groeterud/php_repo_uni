<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploading</title>
</head>
<body>
    <h1>Uploading file</h1>
    <?php
        if ($_FILES['userfile']['error'] > 0){
            echo 'Problem: ';
            switch ($_FILES['userfile']['error']) {
                case 1: echo "File exceeded the allowed file size in the server";
                    break;
                case 2: echo "File exceeded the allowed file size in the browser";
                    break;
                case 3: echo "File only partially uploaded";
                    break;
                case 4: echo "No file uploaded";
                    break;
                case 6: echo "Cannot upload file: No temp directory specified";
                    break;
                case 7: echo "Upload failed: Cannot write to disk";
            }
            exit;
        }

        if($_FILES['userfile']['type'] != 'text/plain') {
            echo "Problem: File is not plain text";
            exit;
        }

        $upfile = './files/'.$_FILES['userfile']['name'];
        if (is_uploaded_file($_FILES['userfile']['tmp_name'])){
            if(!move_uploaded_file($_FILES['userfile']['tmp_name'],$upfile)) {
                echo 'Problem: Could not move file to destination directory';
                exit;
            }
        }
        else {
            echo 'Problem: Possible file upload attack. Filename: ';
            echo $_FILES['userfile']['name'];
            exit;
        }
        echo 'File uploaded successfully<br><br>';
    ?>
</body>
</html>