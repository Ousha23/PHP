<?php
    function getBillets() {
        $bdd = getBDD();
        $billets = $bdd->query('select BIL_ID as id, BIL_DATE as date, BIL_TITRE as titre, BIL_CONTENU as contenu from t_billet order by BIL_ID desc');
        return $billets;
    }

    function getBillet($idBillet){
        $bdd = getBDD();
        $billet = $bdd->prepare('select BIL_ID as id, BIL_DATE as date, BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET where BIL_ID=?');

        $billet->execute(array($idBillet));
        if ($billet->rowCount() == 1) return $billet->fetch();
        else throw new Exception("Aucun billet ne correspond à l'identifiant : $idBillet");
    }

    function getCommentaires($idBillet){
        $bdd = getBDD();
        $commentaires = $bdd->prepare('select COM_ID as id, COM_DATE as date, COM_AUTEUR as auteur, COM_CONTENU as contenu FROM `t_commentaire` WHERE BIL_ID=?');
        $commentaires->execute(array($idBillet));
        return $commentaires;
    }

    function getBDD() {
        //vMAMP
        //$bdd = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8','root','root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $bdd = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $bdd;
    }