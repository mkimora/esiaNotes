<?php
include("connexion.php");

$id=$_POST['id'];

$m=$_POST['nom'];

$s=$_POST['email'];

$n=$_POST['mat'];

$x=$_POST['genre'];

$y=$_POST['niveau'];

$z=$_POST['grade'];

$sql2="update tabetudiant set nomEtudiant ='$m' ,email='$s',matricule='$n',sexe='$x',classe='$y',grade='$z' where id='$id'" ;
$sql = "DELETE from tabetudiant where id='$id'";


if(mysqli_query($connect,$sql2)) {
    header('Location:gereretu.php?succes=3');
}
?>