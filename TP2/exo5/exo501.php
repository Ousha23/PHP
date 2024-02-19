<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TP2-Bases</title>
    </head>
    <body>
        <h1>TP02 lecture fichiers</h1>
        <h2>Exo5 - 01</h2>
        <?php
        $fichierSrc = "tableau-06.txt";

        if (file_exists($fichierSrc)) {
            $lignes = file($fichierSrc);
            foreach ($lignes as $ligne)
            {
                echo("<a href=".$ligne."/>".$ligne."</br>");
            }
        } else {
            echo ("Fichier inexistant");
        }
        ?>
        <h2>Exo5 - 02</h2>
        <?php
        $fichierSrc = "ressources/tableau-07.txt";

        if (file_exists($fichierSrc)) {
            $lignes = file($fichierSrc);
            foreach ($lignes as $ligne)
            {
                $resultat = explode("**", $ligne);
                echo("<a href=".$resultat[0]."/>".$resultat[1]."</br>");
            }
        } else {
            echo ("Fichier inexistant");
        }
        ?>
        <h2>Exo5 - 03</h2>
        <?php
        $fichierSrc = "ressources/tableau-08.txt";

        if (file_exists($fichierSrc)) {
            $lignes = file($fichierSrc);
            $nbrLignes = count($lignes);
            for ($i = 0; $i <= $nbrLignes; $i+=2){
                $j = $i + 1;
                echo("<a href=".$lignes[$j]."/>".$lignes[$i]."</br>");
            }  
        } else {
            echo ("Fichier inexistant");
        }
        ?>

        
    </body>
</html>
