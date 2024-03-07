<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    function getListContacts(){
        $cheminFichier = "param.ini";
        if (!file_exists($cheminFichier)) {
            throw new Exception("Aucun fichier de configuration trouvé");
        }
        else {
            //$tParametres = parse_ini_file($cheminFichier);
            $tParametres = parse_ini_file($cheminFichier, true);// pour extraire les données d'un section
            extract($tParametres['BDD']);//pour cibler la section voulue
            //extract($tParametres); //convertie les clés du tableau en variables
            //$dsn = $tParametres['dsn'];
            //$login = $tParametres['login'];
            //$mdp = $tParametres['mdp'];
            $bdd =new PDO($dsn, $login, $mdp, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $sql = 'SELECT * from CONTACT';
            $resultat= $bdd->query($sql);
            $tResultats = $resultat->fetchAll(PDO::FETCH_ASSOC);
            return $tResultats;
        }
    }

   
    


