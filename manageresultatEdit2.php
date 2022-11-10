<?php
include("connexion.php");

$id=$_POST['id_notes'];

$m=$_POST['nom'];


$php=$_POST['php'];

$java=$_POST['java'];

$compta=$_POST['compta'];

$oracle=$_POST['oracle'];

$uml=$_POST['uml'];

$linux=$_POST['linux'];

$voip=$_POST['voip'];

$windev=$_POST['windev'];

$moyenne = ($php+$java+$compta+$oracle+$uml+$linux+$voip+$windev)/8;


$sql2="update tabnotes set prenomNom ='$m' ,php='$n',java='$s',compta='$x',oracle='$n',uml='$uml',linux='$linux',voip='$voip',windev='$windev' where id_notes='$id'" ;
$sql = "DELETE from tabnotes where id='$id'";




if(mysqli_query($connect,$sql2)) {
    header('Location:gereresultat.php?succes=3');
}
?>