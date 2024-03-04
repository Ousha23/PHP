<?php
    function getBillets() {
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8','root','root');
        } catch (PDOException $e){
            echo $e;
        }
        $billets = $bdd->query('select BIL_ID as id, BIL_DATE as date, BIL_TITRE as titre, BIL_CONTENU as contenu from t_billet order by BIL_ID desc');
        return $billets;
    }