<?php
// Where U want the file uploaded in Folder
$uploadFolder = "../uploads/";
// Full Path with fileName also 
$uploadPath = $uploadFolder . $_FILES["filePath"]["name"];
// pathinfo($uploadPath,PATHING_EXTENSION) to get Path or uploaded file directory
$extensionLower = strtolower(pathinfo($uploadPath, PATHINFO_EXTENSION));
// Tmp file name this is temporary path 
// echo $_FILES["filePath"]["tmp_name"];

// This actually moves the file to location 
move_uploaded_file($_FILES["filePath"]["tmp_name"], $uploadPath);

file_exists($uploadPath) ? (print "File Exists" and $uploadFIleStatus = 1) : (print "Shit Here we go again!!!" and
    $uploadFIleStatus = 0);
echo "<br>" . $uploadFIleStatus;
