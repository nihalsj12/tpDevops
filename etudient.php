<html>
    <head>
        <titre></titre>
        <Link rel="stylesheet" href="style.css">
        <script type="application/javascript" src="age.js"></script>
    </head>
    <body>
        <?php
        require 'cnxEtud.php';
        $sql="select * from etudient";
            $result=$conn->query($sql);
          
            if($result->num_rows>0){
                if($row=$result->fetch_assoc()){
                    $CNE=$row["CNE"];
                    $nom=$row["Nom"];
                    $prenom=$row["Prenom"];
                    $date=$row["Date_Naiss"];
                }
            }
        ?>
        <section>
         <form method="POST" action="ajout.php" >
         
          
            <label><b> CNE:  </b> </label>
            <input type="text" name="CNE" value=<?php echo $CNE?> >
            <label><b> Nom :  </b></label>
            <input type="text" name="Nom" value=<?php echo $nom?> >
            <label><b> Prenom :  </b></label>
            <input type="text" name="prenom" value=<?php echo $prenom?> >
            <label><b> Date Naissance  :  </b></label>
            <input type="date" name="date" id="dateN" value=<?php echo $date?> >
            <input type="submit" value="Ajouter">
            <input type="reset" value='Nouveau'>
            <a href='notes.php/?CNE=<?php echo $CNE ;?>'> <input type='button' value=' liste des notes '> </a><br/>
        </form>
         </section>

      
       
    </body>
</html>