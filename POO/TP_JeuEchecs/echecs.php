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

    // echo "Test Classe Cavalier -----------".RC;
    // $c1= new Cavalier(2,2,2);
    // echo $c1.RC;
    
    // echo ("---Cavalier qui ne peut pas aller au 5,5 : ".RC);
    // $c2 = new Cavalier(1,3,1);
    // echo $c2;
    // $resultat = $c2->peutAllerA(5,5);
    // if ($resultat) echo DEPLACER.RC.RC;
    // else echo NEDEPLACER.RC.RC;

    // echo ("---Cavalier qui peut aller au 5,5 : ".RC);
    // $c3 = new Cavalier(6,3,1);
    // echo $c3;
    // $resultat = $c3->peutAllerA(5,5);
    // if ($resultat) echo DEPLACER.RC.RC;
    // else echo NEDEPLACER.RC.RC;

    // echo "Test Classe FOU -----------".RC;
    // echo ("---Fou qui ne peut pas aller au 5,5 : ".RC);
    // $f2 = new Fou(1,3,1);
    // echo $f2;
    // $resultat = $f2->peutAllerA(5,5);
    // if ($resultat) echo DEPLACER.RC.RC;
    // else echo NEDEPLACER.RC.RC;

    // echo ("---Fou qui peut aller au 5,5 : ".RC);
    // $f3 = new Fou(4,4,1);
    // echo $f3;
    // $resultat = $f3->peutAllerA(5,5);
    // if ($resultat) echo DEPLACER.RC.RC;
    // else echo NEDEPLACER.RC.RC;

    // echo "-------------- Tableau des pieces";
    // $tPieces = [$c1,$c2,$c3,$f2,$f3];
    // foreach ($tPieces as $piece){
    //     echo $piece. ($piece->peutAllerA(5,5) ?  DEPLACER." en (5,5)".RC.RC:  NEDEPLACER." en (5,5)".RC.RC);
    // } 
    
    echo ("---Roi qui ne peut pas aller au 5,5 : ".RC);
    $r1 = new Roi(5,3,PieceEchecs::BLANCHE);
    echo $r1;
    echo "cas (4,5) F: ";
    echo ($r1->peutAllerA(4,5))? DEPLACER.RC.RC: NEDEPLACER.RC.RC;
    echo "cas (4,3) V: ";
    echo ($r1->peutAllerA(4,3))? DEPLACER.RC.RC: NEDEPLACER.RC.RC;
    echo "cas (5,4) V: ";
    echo ($r1->peutAllerA(5,4))? DEPLACER.RC.RC: NEDEPLACER.RC.RC;
    echo "cas (5,5) F: ";
    echo ($r1->peutAllerA(5,5))? DEPLACER.RC.RC: NEDEPLACER.RC.RC;
    echo "cas (5,3) F: ";
    echo ($r1->peutAllerA(5,3))? DEPLACER.RC.RC: NEDEPLACER.RC.RC;
    echo "cas (6,2) V: ";
    echo ($r1->peutAllerA(6,2))? DEPLACER.RC.RC: NEDEPLACER.RC.RC;
    echo "cas (7,1) F: ";
    echo ($r1->peutAllerA(7,1))? DEPLACER.RC.RC: NEDEPLACER.RC.RC;

    $r2 = new Roi(8,7,PieceEchecs::BLANCHE);
    echo $r2;
    echo "cas (8,7) F: ";
    echo ($r2->peutAllerA(8,7))? DEPLACER.RC.RC: NEDEPLACER.RC.RC;
    echo "cas (8,6) V: ";
    echo ($r2->peutAllerA(8,6))? DEPLACER.RC.RC: NEDEPLACER.RC.RC;
    echo "cas (7,8) V: ";
    echo ($r2->peutAllerA(7,8))? DEPLACER.RC.RC: NEDEPLACER.RC.RC;
    echo "cas (9,7) F: ";
    echo ($r2->peutAllerA(9,7))? DEPLACER.RC.RC: NEDEPLACER.RC.RC;
    echo "cas (9,8) F: ";
    echo ($r2->peutAllerA(9,8))? DEPLACER.RC.RC: NEDEPLACER.RC.RC;
    echo "cas (8,8) V: ";
    echo ($r2->peutAllerA(8,8))? DEPLACER.RC.RC: NEDEPLACER.RC.RC;
    echo "cas (7,7) V: ";
    echo ($r2->peutAllerA(7,7))? DEPLACER.RC.RC: NEDEPLACER.RC.RC;
    