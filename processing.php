<?php 
require_once('includes/header.php'); 
require_once('includes/classes/VideoUploadData.php'); 
require_once("includes/classes/VideoProcessor.php");

if(!isset($_POST["uploadButton"])){
    echo "No files sent to page";
    exit();
}

//create file upload data
$videoUploadData = new VideoUploadData(
                    $_FILES["fileInput"],
                    $_POST["titleInput"],
                    $_POST["descriptionInput"],
                    $_POST["privacyInput"],
                    $_POST["categoryInput"],
                    "REPLACE-THIS");

//process video data upload
$videoProcessor = new VideoProcessor($con);
$wasSuccessful = $videoProcessor->upload($videoUploadData);//if upload function returns wasSuccessful will be true                






?>