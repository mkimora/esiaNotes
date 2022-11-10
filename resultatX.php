<?php  
//insertion des notes de controle

$mysqli = new mysqli('localhost', 'root', 'kimora24', 'esiaNotes') or die (mysqli_error($mysqli));



if(isset($_POST['submit']))////checking whether the input element is set or not
{

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

$mysqli->query("INSERT INTO tabnotes(prenomNom,moyenne,php,java,uml,windev,comptabilite,linux,voiceip,oracle) VALUES('$m','$moyenne','$php','$java','$compta','$oracle','$uml','$linux','$voip','$windev')")
or die($mysqli->error);

header('Location:gereresultat.php');

/* 
    if(empty($m) || empty($php) || empty($java) || empty($compta) || empty($oracle) || empty($uml) || empty($linux) || empty($voip) || empty($windev)) {
        header('Location:resultat.php?erreur=2');
    }
    else if(mysqli_query($connect,$sql)) {
        header('Location:resultat.php?succes=1');
    }
    else { 
        echo"Erreur";
    } */
   
}


$sql1="select prenomNom from tabnotes where prenomNom='$m'";

$res=mysqli_query($connect,$sql1);
$row=mysqli_fetch_assoc($res);





/* $sql="INSERT INTO tabnotes(prenomNom,idEtudiant,idClasse,moyenne,php,java,uml,windev,comptabilite,linux,voiceip,oracle) VALUES('$m','$l','$z','$moyenne','$php','$java','$compta','$oracle','$uml','$linux','$voip','$windev')";
 */
    

?>