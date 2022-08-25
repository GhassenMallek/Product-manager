<?php
    include_once '..\Model\Class\Product.class.php';
    $e=new produit();
    $e->id=$_POST['id'];
    $e->Desigation=$_POST['Designation'];
    $e->Prix=$_POST['Prix'];
    $e->Caracteristique=$_POST['Caracteristique'];
    $e->Image='images/produit/'.$_POST["Image"];
    $e->modifproduit($e);
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Updated Successful !!');
    window.location.href='../View/Admin.php';
    </script>");
?>