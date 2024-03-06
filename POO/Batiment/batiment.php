<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    spl_autoload_register(function($classe){
        require_once "Classes/".$classe.".class.php";
    });

    define("RC","</br>\n");
    
    $m1 = new Meuble("bureau",120,70,60);
    $m2 = new Meuble("chaise",40,30,40);
    $m3 = new Meuble("commode",50,50,50);
    //$m3->affiche();
    $m4= new Meuble("Bureau2",100,80,100);
    //$m4= new Meuble("Bureau2",590,80,600);
    $p1 = new Piece("Bureau",600,350,500,4);
    // echo $p1.RC;
    $p2 = new Piece("chambre1",600,350,600,4,[$m1,$m2]);
    $p2->ajouterMeuble($m3);
    $p2->ajouterMeuble($m4);
    //$p2->affiche();
    // echo $p2->getSurfaceMeubles().RC;
    // echo $p2->getSurfaceLibre().RC;
    $p1->ajouterMeuble($m1);
    $b1 = new Batiment("la louvière",10,[$p2,$p1]);
    $b1->affiche();
