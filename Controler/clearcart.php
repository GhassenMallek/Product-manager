<?php session_start();
    unset($_SESSION["cart"]);
    unset($_SESSION["nb"]);
    header("location:../view/cart.php");
?>