<?php
    // Autolaod des classes
    spl_autoload_register(function($classe){
        require_once "Classes/".$classe.".class.php";
    });

    define("RC","\n");
    define("DEPLACER","Peut se déplacer");
    define("NEDEPLACER","Ne peut se déplacer");

    // Programme principal:
    // echo "Test PiecesEchecs --------------".RC;
    // $p1 = new PieceEchecs(1,1,1);
    // echo $p1;
    // $p1->getColorCase(2);
    // echo $p1.RC;

    // $p2 = new PieceEchecs(1,1,3);
    // echo $p2.RC;

    echo "Test Classe Cavalier -----------".RC;
    $c1= new Cavalier(2,2,2);
    echo $c1.RC;
    
    echo ("---Cavalier qui ne peut pas aller au 5,5 : ".RC);
    $c2 = new Cavalier(1,3,1);
    echo $c2;
    $resultat = $c2->peutAllerA(5,5);
    if ($resultat) echo DEPLACER.RC.RC;
    else echo NEDEPLACER.RC.RC;

    echo ("---Cavalier qui peut aller au 5,5 : ".RC);
    $c3 = new Cavalier(6,3,1);
    echo $c3;
    $resultat = $c3->peutAllerA(5,5);
    if ($resultat) echo DEPLACER.RC.RC;
    else echo NEDEPLACER.RC.RC;

    echo "Test Classe FOU -----------".RC;
    echo ("---Fou qui ne peut pas aller au 5,5 : ".RC);
    $f2 = new Fou(1,3,1);
    echo $f2;
    $resultat = $f2->peutAllerA(5,5);
    if ($resultat) echo DEPLACER.RC.RC;
    else echo NEDEPLACER.RC.RC;

    echo ("---Fou qui peut aller au 5,5 : ".RC);
    $f3 = new Fou(4,4,1);
    echo $f3;
    $resultat = $f3->peutAllerA(5,5);
    if ($resultat) echo DEPLACER.RC.RC;
    else echo NEDEPLACER.RC.RC;

    echo "-------------- Tableau des pieces";
    $tabPieces = [$c1,$c2,$c3,$f2,$f3];
    foreach ($tabPieces as $piece){
        echo $piece. ($piece->peutAllerA(5,5) ?  DEPLACER." en (5,5)".RC.RC:  NEDEPLACER." en (5,5)".RC.RC);
    } 
    
