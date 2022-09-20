<?php
include("connexion.php");

$m=$_POST['nom'];

$s=$_POST['section'];

$n=$_POST['niveau'];

$x=$_POST['grade'];

$sql="INSERT INTO tabclasses(className,section,niveau,grade) VALUES('$m','$s','$n','$x')";

$sql1="select className from tabclasses where className='$m'";
$res=mysqli_query($connect,$sql1);
$row=mysqli_fetch_assoc($res);

if(empty($m) || empty($s) || empty($n) || empty($x)) {
    header('Location:ajoutclasse.php?erreur=2');
}
else if(isset($row['className']) == $m) {
    header('Location:ajoutclasse.php?erreur=1');
}
else if(mysqli_query($connect,$sql)) {
    header('Location:ajoutclasse.php?succes=1');
}
else { 
    echo"Erreur";
}
?>