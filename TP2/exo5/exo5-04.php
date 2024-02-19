<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo5 - 04</h1>
    <h2>4.retrouver le mot de passe</h2>
        <form action="exo5-04Suite.php" method="post">
            <?php
            $fichierSrc = "ressources/tableau-09.txt";

            if (file_exists($fichierSrc)) {
                $lignes = file($fichierSrc);
            ?>
            <select name="choix">
            <?php
                foreach ($lignes as $ligne)
                {
                    $resultat = explode(";", $ligne);
                    echo ('<option value='.implode(",",$resultat).'>'.$resultat[1].' '.$resultat[2].'</option>');
                }
             
            ?>
            </select>
            <?php 
            } else {
                echo ("Fichier inexistant");
            }
            
            ?>
            <input type="submit" value="Afficher mot de passe">
        </form>
</body>
</html>
    