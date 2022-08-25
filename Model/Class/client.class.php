<?php
    class client{
        public $id;
        public $First_Name;
        public $Last_Name;
        public $Email;
        public $Centre;
        public $Password;
        public function __construct(){
        }
        public function insertion($c){
            include_once ('..\Model\Config\config.php');
            $cn=new connexion();
            $pdo=$cn->CNX();
            $req="INSERT INTO  client (First_Name,Last_Name,Email,Password,Centre) VALUES ('$c->First_Name','$c->Last_Name','$c->Email','$c->Password','$c->Centre')";
            $pdo->exec($req) or print_r($pdo->errorInfo());
        }
        public function RechClient($email,$password){
            require_once('..\Model\Config\config.php');
            $cnx=new connexion();
            $pdo=$cnx->CNX();
            $req="SELECT * FROM client where Email='$email'and Password='$password'";
            $res=$pdo->query($req) or print_r($pdo->errorInfo()); 	
            return $res;
        }
        public function RechClient2($id){
            require_once('..\Model\Config\config.php');
            $cnx=new connexion();
            $pdo=$cnx->CNX();
            $req="SELECT * FROM client where id='$id'";
            $res=$pdo->query($req) or print_r($pdo->errorInfo()); 	
            return $res;
        }
        public function SuppClient($id){
            require_once('..\Model\Config\config.php');
            $cnx=new connexion();
            $pdo=$cnx->CNX();
            $req="DELETE FROM client where id='$id'";
            $pdo->exec($req) or print_r($pdo->errorInfo()); 	

        }
        function modifClient($e){
            require_once('..\Model\Config\config.php');
            $cnx=new connexion();
            $pdo=$cnx->CNX();
            $req="UPDATE client set First_Name='$e->First_Name',Last_Name='$e->Last_Name',Email='$e->Email',Password='$e->Password',Centre='$e->Centre'  WHERE id='$e->id' ";
            $pdo->exec($req);
        }
        function listClient()
        {
            require_once('..\Model\Config\config.php');
            $cnx=new connexion();
            $pdo=$cnx->CNX();      
            $req="SELECT * FROM client";
            $res=$pdo->query($req) or print_r($pdo->errorInfo()); 	
            return $res; 
        }
        public function loginClient($email,$password){
            require_once('..\Model\Config\config.php');
            $cnx=new connexion();
            $pdo=$cnx->CNX();
            $req="SELECT count(*) FROM client where Password='$password' and Email='$email'";
            $res=$pdo->query($req) or print_r($pdo->errorInfo()); 	
            return $res;
        }
    }
?>