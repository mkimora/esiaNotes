<?php

session_start();

include ("connexion.php");
$e=$_POST['email'];
$p=$_POST['password'];

$sql="SELECT * FROM log_admin WHERE email='$e' and password='$p'";

$res=mysqli_query($connect,$sql);

$row=mysqli_fetch_assoc($res);

if(empty($e) || empty($p))
{
    header('Location: index.html?erreur=2');
}
elseif( mysqli_num_rows($res)==1)
{
    $_SESSION['e']=$e;
    $_SESSION['p']=$p;
    $_SESSION['image']=$row['image'];

    header('location:loged.html');
   
}
else
{
    header('Location:index.html?erreur=1');
}

?>