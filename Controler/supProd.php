<?php
    session_start();
    include_once "..\Model\Class\client.class.php";
include_once "..\Model\Class\Admin.class.php";
include_once "..\Model\Class\Product.class.php";
$p=new produit();
$p->Suppproduit($_GET['id']);
header("location:../view/Admin.php");
?>