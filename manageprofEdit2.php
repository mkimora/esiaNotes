<?php
include("connexion.php");

$id=$_POST['id'];

$m=$_POST['nom'];

$n=$_POST['prenom'];

$o=$_POST['tel'];

$p=$_POST['adresse'];

$q=$_POST['genre'];

$r=$_POST['matiere'];



$sql2="update tabprofesseur set nomprof='$m',prenomprof='$n',telprof='$o',adresseprof='$p',genreprof='$q',matiereprof='$r' where id='$id'" ;
$sql= "DELETE FROM tabclasses WHERE id='$id'";



if(mysqli_query($connect,$sql2)) {
    header('Location:gererprof.php?succes=3');
}
?>