<?php
    require "Personne.class.php";
/*
    $p = new Personne("Dupont");
    $p->afficher();
    /**/
    /*
    $p1 = new Personne("dupont");
    $p1->afficher();
    $p1->setSociete("Java");
    echo ($p1->getSociete()."\n");
    $p1->afficher();
    /**/
    /*
    $p1 = new Personne("dupont", "java");
    $p1->afficher();
    $p2 = new Personne("durand"); // prend "?" par defaut comme 2eme argument donc optionnel
    $p2->afficher();
    echo "Le groupe a un effectife de ".Personne::getEffectif()." Personnes";
    /**/
    /*
    $p3 = new Personne(); // ERREUR, il faut mettre le 1er argument obligatoire (par de val par défaut)
    $p3->afficher();
    **/
    /*
    echo Personne::PAS_DE_SOCIETE; // possible si public et non private
    **/
    
    $p5 = new Personne ("taa","toto");
    $p5->afficher()->setSociete("?");
    $p5->identifier();
    //var_dump($p);
?>