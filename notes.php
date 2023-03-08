<html>
<head>
	<h2> Listes des notes de l'Etudiant
<?php
    
    $CNE=$_GET['CNE'];

    require 'cnxEtud.php';

    $req="select Nom,Prenom from etudient where CNE='$CNE'";
    $resetd=$conn->query($req);
    if($resetd->num_rows>0){
        if($rowetd=$resetd->fetch_assoc()){
            echo ($rowetd["Nom"]." ". $rowetd["Prenom"]);
        }

    }
    ?>
    </h2>
</head>
<body>
    <table border = '1'width='70%'>
	<tr>
        <th>Code Module</th>
        <th>Libelle</th>
        <th>Valeur</th>
    </tr>
    <?php
    
    $sql="select M.Codemod,M.libelle,N.valeur from module M,note N where N.CNE='$CNE' and N.Codemod=M.Codemod ";
    $result=$conn->query($sql);
   //echo $result->num_rows;
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $Codemod=$row["Codemod"];
            $libelle=$row["libelle"];
            $valeur=$row["valeur"];
            
            echo "<tr> <td> $Codemod </td> <td> $libelle </td> <td> $valeur</td></tr>";
        }

    }
    ?>

	
	
	
	


</table>
</body>
</html>