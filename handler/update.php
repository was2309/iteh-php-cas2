<?php

// kreirati  uodate funkciju
require "../dbBroker.php";
require "../model/prijava.php";

if(isset($_POST['id'])&&isset($_POST['sala'])&&isset($_POST['katedra'])
  &&isset($_POST['datum'])&&isset($_POST['predmet'])){
    $azurirana_prijava=new Prijava($_POST['id'],$_POST['predmet'],$_POST['katedra'],$_POST['sala'],$_POST['datum']);
    $status=$azurirana_prijava->update($_POST['id'],$conn);

    if($status){
        echo 'Success';
    }else{
        echo $status;
        echo "Failed";
    }
}


?> 