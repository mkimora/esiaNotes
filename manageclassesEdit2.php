<?php
include("connexion.php");

$id=$_POST['id'];

$m=$_POST['nom'];

$n=$_POST['section'];



$sql2="update tabclasses set className ='$m', section='$n' where id='$id'" ;
$sql= "DELETE FROM tabclasses WHERE id='$id'";



if(mysqli_query($connect,$sql2)) {
    header('Location:gererclasse.php?succes=3');
}
?>