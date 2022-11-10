<?php
include("connexion.php");

$m=$_POST['nom'];

$s=$_POST['email'];

$n=$_POST['mat'];

$x=$_POST['genre'];

$y=$_POST['niveau'];

$z=$_POST['grade'];

$v=$_POST['date'];

$o=$_POST['lieunaiss'];

$zz=$_POST['classe'];


$sql="INSERT INTO tabetudiant(nomEtudiant,email,matricule,sexe,section,grade,date_naissance,lieu_naissance,classe) VALUES('$m','$s','$n','$x','$y','$z','$v','$o','$zz')";

$sql1="select nomEtudiant from tabetudiant where nomEtudiant='$m'";
$res=mysqli_query($connect,$sql1);
$row=mysqli_fetch_assoc($res);

if(empty($m) || empty($s) || empty($n) || empty($x) || empty($y) || empty($z) || empty($v) || empty($o) || empty($zz)) {
    header('Location:etudiant.php?erreur=2');
}
else if(isset($row['nomEtudiant']) == $m) {
    header('Location:etudiant.php?erreur=1');
}
else if(mysqli_query($connect,$sql)) {
    header('Location:etudiant.php?succes=1');
}
else { 
    echo"Erreur";
}
?>