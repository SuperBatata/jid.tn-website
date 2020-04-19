<?php

require_once '../../entities/Debat.php';
require_once '../../core/debatC.php';

$target_dir = "uploads/";
$target_file = $target_dir . uniqid();
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["logo"]["tmp_name"]);
    if($check !== false) {
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
// Allow certain file formats
/*if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}*/
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["logo"]["name"]). " has been uploaded.";
        var_dump($target_file);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

var_dump($_POST);
var_dump($target_file);
// $c = new debat();
$txt=nl2br( $_POST['description']);

$c= new Debat(
    $_POST['prenom']
    ,$_POST['nom']
    ,$_POST['telephone'],
    $_POST['email'],
    $_POST['orgname'],
    $_POST['orgemail'],
    $target_file
    ,$_POST['theme'],
    $txt,
    $_POST['nbrIntervenant'],
    $_POST['dureeHoraire'],
    $_POST['Informations']
);
var_dump($c);
$eventC = new debatC();
$eventC->ajouterdebat($c);
// $reclamc->modifiercontact($r,$_POST['idliv']);
header('location:home.php');
