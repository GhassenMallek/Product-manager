<?php
session_start();
require_once "..\Model\Class\message.class.php";
    $m=new message(); 
    $m->id=$_POST['id'];
    $m->reponse=$_POST['Response'];
    $m->modifClient($m);
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Sent successfuly!!');
    window.location.href='../View/index.php';
    </script>");
?>