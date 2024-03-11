
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "modeles/ContactMgr.class.php";

    function afficherListeContact(){
        $titre = 'Liste Contacts';
        $titrePage = "La liste des contacts";
        require_once "vue/view_header.php";
        try {
            $tContacts = ContactMgr::getListContacts();
            require_once "vue/view_listeContacts.php";
        } catch (PDOException $e) {
            //afficher l'erreur et arrêter le programme
            die("<h1>Erreur de connexion à la base de donnée</h1>" .$e->getMessage());
        }
    }
 
    $action = 'accueil';
 
    if(isset($_GET['action'])){
        $action = $_GET['action'];
        if ($action =='liste'){
//var_dump($_POST);
            if(!isset($_POST['action'])){
                afficherListeContact();
            }
            if (isset($_POST['nom'], $_POST['prenom'], $_POST['tel'], $_POST['action']) && $_POST['action'] === 'ajouterContact'){
                $nom = $_POST['nom'];
                $prenom= $_POST['prenom'];
                $tel = $_POST['tel'];
                if(ContactMgr::addContact($nom,$prenom,$tel)){
                    afficherListeContact();
                    $rep = true;
                    $msg = "Ajout effectué avec succès";
                } else {
                    $dErreur = $e->getMessage();
                }
                require_once "vue/view_rep.php";
            } 
            if (isset($_POST['nom'],$_POST['action']) && $_POST['action'] === 'searchContact'){
                try{
                    $nom = $_POST['nom'];
                    $prenom = $_POST['prenom'];
                    $tel = $_POST['tel'];
                    $tResult = ContactMgr::searchContact($nom, $prenom, $tel);
                    if (count($tResult)==0){
                        $rep = true;
                        $msg = "Aucun contact trouvé";
                        require_once "vue/view_rep.php";
                    } else {
                        $titre = 'Recherche Contact';
                        $titrePage = "Liste des contacts trouvés dans l'annuaire";
                        require_once "vue/view_header.php";
                        require_once "vue/view_rechercheContacts.php";
                    }
                } catch (PDOException $e) {
                    die("<h1>Erreur d'accès à la base de donnée</h1>" .$e->getMessage());
                }
            }
            if (isset($_POST['idContact'],$_POST['action']) && $_POST['action'] === 'delContact'){
//var_dump($_POST);
//die();
                $id = $_POST['idContact'];
                try{
                    if(ContactMgr::delContact($id)){
                        $rep = true;
                        $msg = "Suppression effectuée avec succès";
                        afficherListeContact();
                    } else {
                        $rep = false;
                    }
                    require_once "vue/view_rep.php";
                } catch (Exception $e){
                    die("Erreur : $e");
                }

            } if (isset($_POST['nom'], $_POST['prenom'], $_POST['tel'], $_POST['action']) && $_POST['action'] === 'updContact'){
                $id = $_POST['idContact'];
                $nom = $_POST['nom'];
                $prenom= $_POST['prenom'];
                $tel = $_POST['tel'];
                if(ContactMgr::updContact($id,$nom,$prenom,$tel)){
                    afficherListeContact();
                    $rep = true;
                    $msg = "Modification effectuée avec succès";
                } else {
                    $dErreur = $e->getMessage();
                }
                require_once "vue/view_rep.php";
            } 
        } else if ($action =='ajouter'){
            $titre = 'Ajouter Contact';
            $titrePage = "Ajouter un nouveau contact à l'annuaire";
            require_once 'vue/view_header.php';
            require_once "vue/view_formulaire.php";
        } else if ($action =='rechercher'){
            $titre = 'Rechercher Contact';
            $titrePage = "Rechercher un contact dans l'annuaire";
            require_once 'vue/view_header.php';
            require_once "vue/view_formulaire.php";
        } else if ($action =='modifier' && isset($_POST['idContact'],$_POST['action']) && $_POST['action'] === 'update'){
//var_dump($_POST);
//die();
            $id = $_POST['idContact'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $tel = $_POST['tel'];
            $titre = 'Modifier Contact';
            $titrePage = "Mettre à jour les informations du contact";
            require_once 'vue/view_header.php';
            require_once "vue/view_formulaire.php";
        }
    } else {
        $titre = 'Accueil';
        $titrePage = "Liens vers les services";
        require_once "vue/view_header.php";
        require_once 'vue/view_accueil.php';
    }
    require_once 'vue/view_footer.php';