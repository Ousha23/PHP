<?php

require 'Modele/Model.php';

function accueil(){
    $billets = getBillets();
    require 'Vue/vueAccueil.php';
}

function billet($idBillet) {
    $billet = getBillet($idBillet);
    $commentaires = getCommentaires($idBillet);
    require 'Vue/vueBillet.php';
}

function erreur($msgErreur) {
    require 'Vue/vueErreur.php';
}