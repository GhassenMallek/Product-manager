<?php
    class produit{
        public $id;
        public $Desigation;
        public $Prix;
        public $Caracteristique;
        public $Image;
        public function __construct(){
        }
        public function insertion($c){
            include_once ('..\Model\Config\config.php');
            $cn=new connexion();
            $pdo=$cn->CNX();
            $req="INSERT INTO  produit (Desigation,Prix,Caracteristique,Image) VALUES ('$c->Desigation','$c->Prix','$c->Caracteristique','$c->Image')";
            $pdo->exec($req) or print_r($pdo->errorInfo());
        }
        public function Rechproduit($id){
            require_once('..\Model\Config\config.php');
            $cnx=new connexion();
            $pdo=$cnx->CNX();
            $req="SELECT * FROM produit where id='$id'";
            $res=$pdo->query($req) or print_r($pdo->errorInfo()); 	
            return $res;
        }
        public function Suppproduit($id){
            require_once('..\Model\Config\config.php');
            $cnx=new connexion();
            $pdo=$cnx->CNX();
            $req="DELETE FROM produit where id='$id'";
            $res=$pdo->query($req) or print_r($pdo->errorInfo()); 	
            return $res;
        }
        function modifproduit($e){
            require_once('..\Model\Config\config.php');
            $cnx=new connexion();
            $pdo=$cnx->CNX();
            $req="UPDATE produit set Desigation='$e->Desigation',Prix='$e->Prix',Caracteristique='$e->Caracteristique',Image='$e->Image'  WHERE id='$e->id' ";
            $pdo->exec($req)  or print_r($pdo->errorInfo());
        }
        function listproduit()
        {
            require_once('..\Model\Config\config.php');
            $cnx=new connexion();
            $pdo=$cnx->CNX();      
            $req="SELECT * FROM produit";
            $res=$pdo->query($req) or print_r($pdo->errorInfo()); 	
            return $res; 
        }
    }
?>