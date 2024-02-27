<?php
    define("PARAM_HOST","unix_socket=/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock");
    define("PARAM_PORT",3306);
    define("PARAM_USER","root");
    define("PARAM_PWD","");
    define("PARAM_DB","sdbm_v2");

    try {
        $connexion = new PDO("mysql:".PARAM_HOST.";port=".PARAM_PORT.";dbname=".PARAM_DB,PARAM_USER,PARAM_PWD);
            
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connexion Réussie à la base de donnée .\n";

    } catch(PDOException $e) {
        echo "La connexion a échouée : ".$e->getMessage();
        exit;
    }
    
    // Requête extraction données :

    // $resultats = $connexion->query("SELECT * 
    //                                 FROM `Pays`
    //                                 WHERE id_continent = 4");
    // $lignes = $resultats->fetchAll();
    // echo "Nombre de lignes retournées : " . count($lignes)."\n";
    // var_dump($lignes);
    // foreach ($lignes as $ligne) 
    //     echo $ligne["ID_PAYS"]."-".$ligne["NOM_PAYS"]."-".$ligne["ID_CONTINENT"]."\n";

    /*
    // requête préparée :
    $sql="SELECT * 
            FROM `Pays`
            WHERE ID_CONTINENT = 4
            AND NOM_PAYS = ?";

    $resultat = $connexion->prepare($sql);

    $resultat->execute(array("CHINE"));
    $lignes = $resultat->fetchAll();
    echo "Nombre de lignes retournées : " . count($lignes)."\n";
    // var_dump($lignes);
    foreach ($lignes as $ligne) 
        echo $ligne["ID_PAYS"]."-".$ligne["NOM_PAYS"]."-".$ligne["ID_CONTINENT"]."\n";
    */
    /*
    // requête préparée 2EME VERSION:
    $sql="SELECT * 
            FROM `Pays`
            WHERE ID_CONTINENT = 4
            AND NOM_PAYS = :paysRecherche";

    $resultat = $connexion->prepare($sql);
    $paysRecherche = "JAPON";
    $resultat->execute(array(':paysRecherche'=>$paysRecherche));
    $lignes = $resultat->fetchAll();
    echo "Nombre de lignes retournées : " . count($lignes)."\n";
    var_dump($lignes);
    foreach ($lignes as $ligne) 
        echo $ligne["ID_PAYS"]."-".$ligne["NOM_PAYS"]."-".$ligne["ID_CONTINENT"]."\n";
    */
    // $paysRecherche = 5;
    // $sql=" SELECT * FROM `marque` m 
    //     JOIN pays p ON m.ID_PAYS = p.ID_PAYS
    //     WHERE p.ID_PAYS = :paysRecherche"; 

    // $resultat = $connexion->prepare($sql);
    // $resultat->execute(array(':paysRecherche'=>$paysRecherche));
    // $lignes = $resultat->fetchAll();
    // var_dump($lignes);