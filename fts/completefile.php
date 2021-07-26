<?php


require "connection/connection.php";
require "init.php";


$file_id = $_REQUEST["file_id"];

$fileQuery =  "UPDATE `files`  SET com = 1 WHERE id = $file_id;";
$getFileResult = mysqli_query($connection,$fileQuery );
header("location: files.php");
?>