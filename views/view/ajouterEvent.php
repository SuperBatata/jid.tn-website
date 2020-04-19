<?php

require_once '../../entities/events.php';
require_once '../../core/eventC.php';
/***********image uploads  ***********/
$target_dir = "uploads/";
$target_file = $target_dir . uniqid();

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["logo"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["logo"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["logo"]["name"]) . " has been uploaded.";
        var_dump($target_file);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
/*********files  uploads ******************/

// name of the uploaded file
$filename = $_FILES['myfile']['name'];

// destination of the file on the server
$destination = 'uploads/' . $filename;
// get the file extension
$extension = pathinfo($filename, PATHINFO_EXTENSION);

// the physical file on a temporary uploads directory on the server
$file = $_FILES['myfile']['tmp_name'];
$size = $_FILES['myfile']['size'];

if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
    echo "You file extension must be .zip, .pdf or .docx";
} elseif ($_FILES['myfile']['size'] > 10000000) { // file shouldn't be larger than 1Megabyte
    echo "File too large!";
} else {
    // move the uploaded (temporary) file to the specified destination
    if (move_uploaded_file($file, $destination)) {
        echo "succ";
    } else {
        echo "Failed to upload file.";
    }
}

$presentation = nl2br($_POST['presentation']);
$description = nl2br($_POST['description']);
$c = new events(
    $_POST['type'],
    $_POST['nom'],
    $_POST['web'],
    $target_file,
    $presentation,
    $_POST['title'],
    $_POST['start'],
    $_POST['end'],
    $description,
    $_POST['duree'],
    $_POST['place'],
    $_POST['latitude'],
    $_POST['longetude'],
    $_POST['placeName'],
    $_POST['exactplace'],
    $_POST['eventLink'],
    $destination
);

$eventC = new eventC();
$eventC->ajouterevent($c);
// $reclamc->modifiercontact($r,$_POST['idliv']);
header('location:home.php');
