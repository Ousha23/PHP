<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


    require_once 'modeles/modele.inc.php';
    //require_once 'vue/view_header.php';

    if(isset($_GET['action'])){
        if ($_GET['action']=='liste'){
            if (isset($_POST['nom'], $_POST['prenom'], $_POST['tel'], $_POST['action']) && $_POST['action'] === 'ajouterContact'){
                    $nom = $_POST['nom'];
                    $prenom = $_POST['prenom'];
                    $tel = $_POST['tel'];
                    addContact($nom,$prenom,$tel);
            }
            $liste = getListContacts();
            require_once "vue/view_listeContacts.php";
        } else if ($_GET['action']=='ajouter'){
            require_once "vue/view_formulaire.php";
        }
    }else {
        require_once 'vue/view_accueil.php';
    }
    require_once 'vue/view_footer.php';