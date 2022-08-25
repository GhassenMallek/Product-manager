<?php
    include_once "..\Model\Class\client.class.php";
    include_once "..\Model\Class\Admin.class.php";
    $id=$_GET['id'];
    $e=new client();
    $e->SuppClient($id);
    header("location:../view/Admin.php");
?>