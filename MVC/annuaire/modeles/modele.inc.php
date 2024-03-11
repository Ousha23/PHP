<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    /**
     * Etablie la connexion avec la
     *
     * @return void
     */
    function connectBDD(){
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
            return $bdd;
        }
    }
    function getListContacts(){
        $bdd=connectBDD();
        $sql = 'SELECT * from CONTACT';
        $resultat= $bdd->query($sql);
        $tResultats = $resultat->fetchAll(PDO::FETCH_ASSOC);
        return $tResultats;
    }
 
    function addContact(string $nom,string $prenom,string $tel){
        
            $bdd=connectBDD();
        try {
            $sql = "INSERT into CONTACT (`nom`,`prenom`,`telephone`) VALUES (?,?,?)";
            $resultat = $bdd->prepare($sql);
            $resultat->execute(array($nom, $prenom, $tel));
            return true;
        } catch (PDOException $e){
                echo "Erreur d'ajout: ".$e->getMessage();
                return false;
 
        }
    }
 
    function searchContact(string $nom){
        $bdd=connectBDD();
        $sql = "SELECT * from CONTACT where `nom` LIKE ?";
        $resultat = $bdd->prepare($sql);
        $resultat->execute(array('%'.$nom.'%'));
        $tResultat = $resultat->fetchAll(PDO::FETCH_ASSOC);
        return $tResultat;
    }

    function delContact(int $id){
        
            $bdd=connectBDD();
        try {
            $sql="DELETE from CONTACT where `id` = ? ";
            $resultat = $bdd->prepare($sql);
            $resultat->execute(array($id));
            return true;
        } catch (PDOException $e){
            echo "Erreur de suppression: ".$e->getMessage();
            return false;
        }  
    }

    function updContact(int $id, string $nom, string $prenom, string $tel):bool{
        $bdd=connectBDD();
    try {
        
        $sql="UPDATE `CONTACT` SET `nom`= ?,`prenom`= ?,`telephone`= ? WHERE `id`=?";
        $resultat = $bdd->prepare($sql);
        $resultat->execute(array($nom, $prenom, $tel, $id));
        return true;
    } catch (PDOException $e){
        echo "Erreur de MAJ: ".$e->getMessage();
        return false;
    }  
}