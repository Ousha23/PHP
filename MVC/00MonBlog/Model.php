<?php
    function getBillets() {
        $bdd = getBDD();
        $billets = $bdd->query('select BIL_ID as id, BIL_DATE as date, BIL_TITRE as titre, BIL_CONTENU as contenu from t_billet order by BIL_ID desc');
        return $billets;
    }

    function getBDD() {
        $bdd = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8','root','root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $bdd;
    }