<?php

    $cheminSocket= "unix_socket=/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock";
    $serveur = "localhost";
    $username = "root";
    $mdp = "";
    $bdd ="SDBMV2";
    try {
        $connexion = new PDO("mysql:$cheminSocket;dbname=$bdd",$username,$mdb);

        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connexion Réussie à la base de donnée : $bdd.\n";

    } catch(PDOException $e) {
        echo "La connexion a échouée : ".$e->getMessage();
        exit;
    }
    /*
    $resultats = $connexion->query("SELECT * 
                                    FROM `Pays`
                                    WHERE id_continent = 4");
    $lignes = $resultats->fetchAll();
    echo "Nombre de lignes retournées : " . count($lignes)."\n";
    //var_dump($ligne);
    foreach ($lignes as $ligne) 
        echo $ligne["id_pays"]."-".$ligne["nom_pays"]."-".$ligne["id_continent"]."\n";
    **/
    $sql = "SELECT * 
            FROM `Pays`
            WHERE id_continent = ?";
    $results = $connexion->prepare($sql);
    $results->execute(array(4));
