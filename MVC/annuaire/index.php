
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 
    require_once 'modeles/modele.inc.php';
    $action = 'accueil';
 
    if(isset($_GET['action'])){
        $action = $_GET['action'];
        if ($action =='liste'){
            if (isset($_POST['nom'], $_POST['prenom'], $_POST['tel'], $_POST['action']) && $_POST['action'] === 'ajouterContact'){
                $nom = $_POST['nom'];
                $prenom= $_POST['prenom'];
                $tel = $_POST['tel'];
                addContact($nom,$prenom,$tel);
            } 
            $titre = 'Liste Contacts';
            $titrePage = "La liste des contacts";
            require_once "vue/view_header.php";
            try {
                $tContacts = getListContacts();
                require_once "vue/view_listeContacts.php";
            } catch (PDOException $e) {
            //afficher l'erreur et arrêter le programme
            die("<h1>Erreur de connexion à la base de donnée</h1>" .$e->getMessage());
            }
            if (isset($_POST['nom'],$_POST['action']) && $_POST['action'] === 'searchContact'){
                try{
                    $nom = $_POST['nom'];
                    $tResult = searchContact($nom);
                    if (count($tResult)==0){
                        throw new Exception ("Aucun contact trouvé");
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
        }
    } else {
        $titre = 'Accueil';
        $titrePage = "Liens vers les services";
        require_once "vue/view_header.php";
        require_once 'vue/view_accueil.php';
    }
    require_once 'vue/view_footer.php';