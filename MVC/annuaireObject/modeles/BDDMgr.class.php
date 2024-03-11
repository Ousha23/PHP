<?php
    class BDDMgr {
        static function connectBDD(){
            $cheminFichier = "param.ini";
            if (!file_exists($cheminFichier)) {
                throw new Exception("Aucun fichier de configuration trouvé");
            }
            else {
                $tParametres = parse_ini_file($cheminFichier, true);
                extract($tParametres['BDD']);
                $bdd =new PDO($dsn, $login, $mdp, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                return $bdd;
            }
        }
    }