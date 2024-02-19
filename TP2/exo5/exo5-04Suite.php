<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultat</title>
</head>
<body>
    <?php
    print_r($_POST); //debug
    if (isset($_POST["choix"])){
        $donnee = explode(",",$_POST["choix"]);
        echo ("<p>Le mot de passe de".$donnee[1]." ".$donnee[2]." est : ".$donnee[3]."</p>");
    }
    else {
        header("location:exo5-04.php");
    }
    
    ?>
</body>
</html>