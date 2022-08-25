<?php
    include_once "..\Model\Class\client.class.php";
    include_once "..\Model\Class\Admin.class.php";
    session_start();
    $e=new client();
    $a=new Admin();
    $mail=$_GET["email"];
    $password=$_GET["password"];
    $res=$e->RechClient($mail,$password);
    $row=$res->fetch();
    $a->id=$row[0];
    $a->First_Name=$row[1];
    $a->Last_Name=$row[2];
    $a->Email=$row[3];
    $a->Password=$row[4];
    $a->insertion($a);
   header("location:../view/Admin.php");
?>