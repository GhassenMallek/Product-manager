<?php 
if($_POST['Password']==$_POST['rePassword']){
    include_once '..\Model\Class\client.class.php';
    $e=new client();
    $e->id=$_POST['id'];
    $e->First_Name=$_POST['First_Name'];
    $e->Last_Name=$_POST['Last_Name'];
    $e->Email=$_POST['Email'];
    $e->Centre=implode(',',$_POST["Centre"]);
    $e->Password=$_POST['Password'];
    $e->modifClient($e);
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Modification Successful !!');
    window.location.href='../View/Admin.php';
    </script>");
}else{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Password doesnt match !!!');
    window.location.href='../View/Admin.php';
    </script>");
}
?>