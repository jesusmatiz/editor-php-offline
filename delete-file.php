<?php

$filename = $_GET['filename'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if( $ext == "php" && 
    $filename != "delete-file.php" && 
    $filename != "file-write.php" && 
    $filename != "index.php") {
   unlink("./" . $filename);
}
