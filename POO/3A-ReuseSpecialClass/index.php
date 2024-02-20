<?php
    spl_autoload_register(function($classe){ // permet de reccupérer par défaut toutes les classes dans le repertoire classes
        require_once "classes/".$classe.".class.php";
    });
    
    $p1 = new Personne("toto",20);
    $p1 = new Salarie("AFPA");
    echo ($p1);
    $p2 = new Salarie("AFPA","test");
    //var_dump($p1);
    
    $p2->changerAgeSalarie(20);
    echo ($p2."\n\n");

    echo ("Création Cercle :\n");
    $c1 = new Cercle(2,0,0);
    echo ($c1."\n\n");

    echo ("Création Rectangle :\n");
    $r1 = new Rectangle(4,2,3,2);
    echo ($r1."\n\n");

    echo ("Création Carre :\n");
    $car1 = new Carre(4,3,2);
    echo ($car1."\n\n");


?>