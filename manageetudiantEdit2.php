<?php
include("connexion.php");

$id=$_POST['id'];

$m=$_POST['nom'];

$v=$_POST['date'];

$o=$_POST['lieunaiss'];

$s=$_POST['email'];

$n=$_POST['mat'];

$x=$_POST['genre'];

$y=$_POST['niveau'];

$z=$_POST['grade'];

$zz=$_POST['classe'];





$sql2="update tabetudiant set nomEtudiant ='$m' ,email='$s',matricule='$n',sexe='$x',section='$y',grade='$z' ,date_naissance='$v' ,lieu_naissance='$o' ,classe='$zz' where id='$id'" ;
$sql = "DELETE from tabetudiant where id='$id'";


if(mysqli_query($connect,$sql2)) {
    header('Location:gereretu.php?succes=3');
}
?>