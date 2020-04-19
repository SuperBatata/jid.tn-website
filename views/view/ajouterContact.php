<?php
require_once '../../entities/Contact.php';
require_once '../../core/contactC.php';

// var_dump($_POST);
$txt=nl2br( $_POST['message']);
// var_dump($txt);

$c = new contact($_POST['sujet'], $_POST['email'], $_POST['nom'], $txt);
$contactC = new contactC();
$contactC->ajoutercontact($c);
// $reclamc->modifiercontact($r,$_POST['idliv']);
header('location:home.php');
?>