<?php
include_once "..\Model\Class\client.class.php";
include_once "..\Model\Class\Admin.class.php";
    $c=new client();
    $p=new Admin();
    $mail=$_POST["email"];
    $pass=$_POST["password"];
    if($p->loginAdmin($mail,$pass)->fetchColumn(0)!=0){
        session_start();
            $_SESSION["emailAdmin"]=$mail;
            $_SESSION["passwordAdmin"]=$pass;
            header("location:../View/index.php");
    }elseif($c->loginClient($mail,$pass)->fetchColumn(0)!=0){
            session_start();
            $_SESSION["email"]=$mail;
            $_SESSION["password"]=$pass;
            header("location:../View/index.php");
        
    }else{
        echo ("<script LANGUAGE='JavaScript'>
    window.alert('Verifier vos Donnees !!!');
    window.location.href='../View/Login.php';
    </script>");
    }
?>