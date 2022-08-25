<?php
class message{
    public $id;
    public $emailSender;
    public $message;
    public $reponse;
    public function __construct(){
    }
    public function insertion($c){
        $email=$_SESSION['email'];
        $message=$_POST['message'];
        $cnx=new connexion();
        $PDO=$cnx->CNX();
        $req="INSERT INTO message (emailSender,message,reponse) VALUES ('$c->emailSender','$c->message','')";
        $PDO->exec($req) or print_r($PDO->errorInfo());
    }
    public function RechMes($email){
        require_once('..\Model\Config\config.php');
        $cnx=new connexion();
        $pdo=$cnx->CNX();
        $req="SELECT * FROM message where emailSender='$email'";
        $res=$pdo->query($req) or print_r($pdo->errorInfo()); 	
        return $res;
    }
    function modifClient($e){
        require_once("..\Model\Config\config.php");
        $cnx=new connexion();
        $PDO=$cnx->CNX();
        $req="UPDATE message SET reponse='$e->reponse' where id='$e->id'";
        $PDO->exec($req) or print_r($PDO->errorInfo());
    }
}
?>