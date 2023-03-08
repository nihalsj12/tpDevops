<?php
require 'cnxEtud.php';
$CNE=$_POST['CNE'];
$nom=$_POST['Nom'];
$prenom=$_POST['prenom'];
$date=$_POST['date'];

$req="INSERT INTO etudient values ('$CNE','$nom','$prenom','$date')";


if($conn->query($req))
  /*  echo "Enregistrement insere avec success";
}else{
    echo"Error:".$req ."<br>".$conn->error;
}*/
header ('location:  ./etudient.php')

?>