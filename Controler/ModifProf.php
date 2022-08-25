<?php 
if($_POST['Password']==$_POST['rePassword']){
    include_once '..\Model\Class\client.class.php';
    $c=new client();
    session_start();
    $email=$_SESSION["email"];
    $password=$_SESSION["password"];
    $e=new Client();
    $res=$e->RechClient($email,$password);
    $row=$res->fetch();
    $e->id=$row[0];
    $e->First_Name=$_POST['First_Name'];
    $e->Last_Name=$_POST['Last_Name'];
    $e->Email=$_POST['Email'];
    $e->Centre=implode(',',$_POST["Centre"]);
    $e->Password=$_POST['Password'];
    $e->modifClient($e);
    $_SESSION['email']=$_POST['Email'];
    $_SESSION['password']=$_POST['Password'];
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Modification Successful !!');
    window.location.href='../View/Profile.php';
    </script>");
}else{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Password doesnt match !!!');
    window.location.href='../View/Profile.php';
    </script>");
}
?>