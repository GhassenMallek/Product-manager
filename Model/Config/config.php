<?php
    class connexion{
            function CNX(){
                return new PDO('mysql:host=localhost;dbname=projet','root','');
            }
    }
?>