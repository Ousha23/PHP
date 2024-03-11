<?php
    require_once "modeles/BDDMgr.class.php";

    class ContactMgr {
        static function getListContacts(){
            $bdd=BDDMgr::connectBDD();
            $sql = 'SELECT * from CONTACT';
            $resultat= $bdd->query($sql);
            $tResultats = $resultat->fetchAll(PDO::FETCH_ASSOC);
            return $tResultats;
        }
     
        static function addContact(string $nom,string $prenom,string $tel){
            
            $bdd=BDDMgr::connectBDD();
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
     
        static function searchContact(string $nom){
            $bdd=BDDMgr::connectBDD();
            $sql = "SELECT * from CONTACT where `nom` LIKE ?";
            $resultat = $bdd->prepare($sql);
            $resultat->execute(array('%'.$nom.'%'));
            $tResultat = $resultat->fetchAll(PDO::FETCH_ASSOC);
            return $tResultat;
        }
    
        static function delContact(int $id){
            
            $bdd=BDDMgr::connectBDD();
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
    
        static function updContact(int $id, string $nom, string $prenom, string $tel):bool{
            $bdd=BDDMgr::connectBDD();
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
    }