<?php

// no file
if (!$_POST || !isset($_FILES['uploadFile']))
    die('No file uploaded');

// get file info
$file        = $_FILES['uploadFile'];
$file_name   = $file['name'];
$target_name = basename($file['name']);

// move the uploaded file
if (move_uploaded_file($file['tmp_name'], $target_name))
    echo "The file was uploaded successfully.";
else
    echo "The file failed to upload.";

?>