<?php
require_once 'Model.php';
try {
    $billets = getBillets();
    require_once 'vueAccueil.php';
} catch (Exception $e){
    $e->getMessage();
    require_once 'vueErreur.php';
}
