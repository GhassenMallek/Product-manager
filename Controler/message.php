<?php
session_start();
require_once("..\Model\Config\config.php");
require_once("..\Model\Class\message.class.php");
if(isset($_SESSION["password"]) && isset($_SESSION["email"])){
    $m=new message(); 
    $m->emailSender=$_SESSION["email"];
    $m->message=$_POST['message'];
    $m->insertion($m);
    /*echo ("<script LANGUAGE='JavaScript'>
    window.alert('Sent successfuly!!');
    window.location.href='../View/index.php';
    </script>");*/
}else{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Veuillez s inscrire d abord !!');
    window.location.href='../View/contact.php';
    </script>");
}
?>