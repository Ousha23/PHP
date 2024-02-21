<?php
    // Autolaod des classes
    spl_autoload_register(function($classe){
        require_once "Classes/".$classe.".class.php";
    });

    define("RC","\n");

    // Programme principal:
    // $p1 = new PieceEchecs(1,1,1);
    // echo $p1;
    // $p1->getColorCase(2);
    // echo $p1;

    // $p2 = new PieceEchecs(1,1,3);
    // echo $p2;

    // $c1= new Cavalier(2,2,2);
    // echo $c1;
    
    echo ("Cavalier qui ne peut pas aller au 5,5 : ".RC);
    $c2 = new Cavalier(1,3,1);
    echo $c2;
    $resultat = $c2->peutAllerA(5,5);
    if ($resultat) echo "Pt se dep".RC;
    else echo "Ne pt se dep".RC.RC;

    echo ("Cavalier qui peut aller au 5,5 : ".RC);
    $c3 = new Cavalier(6,3,1);
    echo $c3;
    $resultat = $c3->peutAllerA(5,5);
    if ($resultat) echo "Pt se dep".RC;
    else echo "Ne peut se dép".RC.RC;

    echo ("Fou qui ne peut pas aller au 5,5 : ".RC);
    $f2 = new Fou(1,3,1);
    echo $f2;
    $resultat = $f2->peutAllerA(5,5);
    if ($resultat) echo "Pt se dep".RC;
    else echo "Ne pt se dep".RC.RC;

    echo ("Fou qui peut aller au 5,5 : ".RC);
    $f3 = new Fou(4,4,1);
    echo $f3;
    $resultat = $f3->peutAllerA(5,5);
    if ($resultat) echo "Pt se dep".RC;
    else echo "Ne peut se dép".RC.RC;

    // $f4 = new Fou(2,2,1);
    // echo $f4;
    // $resultat = $f4->peutAllerA(9,9);
    // if ($resultat) echo "Pt se dep".RC;
    // else echo "Ne peut se dép".RC.RC;

    
