<?php
include("connexion.php");

$m=$_POST['nom'];

$v=$_POST['prenom'];

$o=$_POST['tel'];

$s=$_POST['adresse'];

$x=$_POST['genre'];

$y=$_POST['mat'];



$sql="INSERT INTO tabprofesseur(nomprof,prenomprof,telprof,adresseprof,genreprof,matiereprof) VALUES('$m','$v','$o','$s','$x','$y')";

$sql1="select nomprof from tabprofesseur where nomprof='$m'";
$res=mysqli_query($connect,$sql1);
$row=mysqli_fetch_assoc($res);

if(empty($m) || empty($v) || empty($o) || empty($s) || empty($x) || empty($y)) {
    header('Location:professeur.php?erreur=2');
}
else if(isset($row['nomEtudiant']) == $m) {
    header('Location:professeur.php?erreur=1');
}
else if(mysqli_query($connect,$sql)) {
    header('Location:professeur.php?succes=1');
}
else { 
    echo"Erreur";
}
?>