<?php
include("connexion.php");

$id=$_POST['id'];

$m=$_POST['nom'];

$s=$_POST['section'];

$nn=$_POST['niveau'];

$nnn=$_POST['grade'];

$sql2= "DELETE FROM tabclasses WHERE id='$id'";



if(mysqli_query($connect,$sql2)) {
    header('Location:gererclasse.php?succes=3');
}
?>