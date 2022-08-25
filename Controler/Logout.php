<?php 
    session_start();
    session_unset();
    header ("location:../View/index.php");
?>