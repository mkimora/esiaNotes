<?php
include("connexion.php");

$m=$_POST['nom'];
$n=$_POST['section'];





$sql="INSERT INTO tabclasses(className,section) VALUES('$m','$n')";

$sql1="select className from tabclasses where className='$m'";
$res=mysqli_query($connect,$sql1);
$row=mysqli_fetch_assoc($res);

if(empty($m)) {
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