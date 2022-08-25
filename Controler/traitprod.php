<?php 
    include_once '..\Model\Class\Product.class.php';
    $e=new produit();
    $e->Desigation=$_POST['Desigation'];
    $e->Prix=$_POST['Prix'];
    $e->Caracteristique=$_POST['Caracteristique'];
    $e->Image='images/produit/'.$_POST["Image"];
    $e->insertion($e);
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Added Successful !!');
    window.location.href='../View/Admin.php';
    </script>");
?>