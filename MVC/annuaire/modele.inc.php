<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    function getListContact(){
        $cheminFichier = "param.ini";
        if (!file_exists($cheminFichier)) {
            throw new Exception("Aucun fichier de configuration trouvé");
        }
        else {
            $parametres = parse_ini_file($cheminFichier);
            $dsn = $parametres['dsn'];
            $login = $parametres['login'];
            $mdp = $parametres['mdp'];
            $bdd =new PDO($dsn, $login, $mdp, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $sql = 'select * from CONTACT';
            $resultat= $bdd->query($sql);
            $resultats = $resultat->fetchAll(PDO::FETCH_ASSOC);
            return $resultats;
        }
    }

   
    


