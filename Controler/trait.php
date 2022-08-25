<?php
    include_once '..\Model\Class\client.class.php';
    $c=new client();

    $c->First_Name=$_POST["First_Name"];
    $c->Last_Name=$_POST["Last_Name"];
    $c->Email=$_POST["Email"];
    $c->Centre=implode(',',$_POST["Centre"]);
    $c->Password=$_POST["Password"];
    $rePassword=$_POST["rePassword"];
    if($c->RechClient($c->Email,$c->Password)->fetchColumn(0)==0 && $rePassword==$c->Password){
    $c->insertion($c);
    header("location:../View/index.php");
    }else{if($c->RechClient($c->Email,$c->Password)->fetchColumn(0)!=0){
        /*echo ("<script LANGUAGE='JavaScript'>
    window.alert('Mail already existing !!!');
    window.location.href='../View/Inscription.php';
    </script>");*/
    }if($rePassword!=$c->Password){
        echo ("<script LANGUAGE='JavaScript'>
    window.alert('Password doesnt match !!!');
    window.location.href='../View/Inscription.php';
    </script>");
    }
    }
?>