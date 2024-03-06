<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    require_once 'modele.inc.php';
        
    require_once 'vue/view_header.php';

    if(isset($_GET['action'])){
        if ($_GET['action']=='liste'){
            $liste = getListContact();
            require_once "vue/view_listeContacts.php";
            require_once 'vue/view_footer.php';
        } else require_once 'vue/view_accueil.php';
    }else require_once 'vue/view_accueil.php';
    