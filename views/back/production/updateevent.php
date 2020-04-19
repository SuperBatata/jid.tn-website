<?php
require_once '../../../core/eventC.php';
$emc = new eventC();
if(isset($_POST['accepter'])){
    var_dump($_POST['accepter']);
    $emc->updateevent($_POST['accepter']);
    }
// $reclamc->modifiercontact($r,$_POST['idliv']);
header('location:events.php');
?>