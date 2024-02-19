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
    echo ($p2);
?>