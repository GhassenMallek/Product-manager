<?php
    class Admin{
        public $First_Name;
        public $Last_Name;
        public $Email;
        public $Password;
        public function __construct(){
        }
        public function insertion($c){
            include_once ('..\Model\Config\config.php');
            $cn=new connexion();
            $pdo=$cn->CNX();
            $req="INSERT INTO  Admin (First_Name,Last_Name,Email,Password) VALUES ('$c->First_Name','$c->Last_Name','$c->Email','$c->Password')";
            $pdo->exec($req) or print_r($pdo->errorInfo());
        }
        public function RechAdmin($email){
            require_once('..\Model\Config\config.php');
            $cnx=new connexion();
            $pdo=$cnx->CNX();
            $req="SELECT count(*) FROM Admin where Email='$email'";
            $res=$pdo->query($req) or print_r($pdo->errorInfo()); 	
            return $res;
        }
        public function SuppAdmin($login,$motdepasse){
            require_once('..\Model\Config\config.php');
            $cnx=new connexion();
            $pdo=$cnx->CNX();
            $req="DELETE FROM Admin where login='$login'and motdepasse='$motdepasse'";
            $res=$pdo->query($req) or print_r($pdo->errorInfo()); 	
            return $res;
        }
        function modifAdmin($e){
            require_once('..\Model\Config\config.php');
            $cnx=new connexion();
            $pdo=$cnx->CNX();
            $req="UPDATE Admin set type='$e->type' WHERE login='$e->login'and motdepasse='$e->motdepasse' ";
            $pdo->exec($req);
        }
        function listAdmin()
        {
            require_once('..\Model\Config\config.php');
            $cnx=new connexion();
            $pdo=$cnx->CNX();      
            $req="SELECT * FROM Admin";
            $res=$pdo->query($req) or print_r($pdo->errorInfo()); 	
            return $res; 
        }
        public function loginAdmin($email,$password){
            require_once('..\Model\Config\config.php');
            $cnx=new connexion();
            $pdo=$cnx->CNX();
            $req="SELECT count(*) FROM Admin where Password='$password' and Email='$email'";
            $res=$pdo->query($req) or print_r($pdo->errorInfo()); 	
            return $res;
        }
    }
?>