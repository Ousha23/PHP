<?php
    spl_autoload_register(function($classe){
        require_once "Classes/".$classe.".class.php";
    });

    define("RC","\n");

    echo "Création d'une Citadine :".RC;
    $c1 = new Citadine("test",1,"modtest",2 );
    echo $c1.RC;

    echo "Création d'un Utilitaite :".RC;
    $u1 = new Utilitaire("testU",1,"modtestU",2 );
    echo $u1.RC;

    echo "Création d'un Utilitaite :".RC;
    $f1 = new Familiale("testF",1,"modtestF",7); // f1 est une instance/objet de la classe Familiale
    echo $f1.RC;

    echo "Alimentation Parc :".RC;
    ParcVehicule::enregistrer($f1);
    ParcVehicule::enregistrer($u1);
    ParcVehicule::enregistrer($c1);
    ParcVehicule::getParc();
    // $pv1 = new ParcVehicule();
    // $pv1 -> enregistrer($f1);
    // $pv1 -> getParc();

    echo "Création Outil :".RC;
    $o1 = new Outil(1,"testOutillage",true);
    echo $o1.RC;

    echo "Création Depanneuse :".RC;
    $d1 = new Depanneuse(1,"testDepanneuse");
    echo $d1.RC;
    
    echo "Planification de Révision : ".RC;
    $tVehicule = [$f1,$u1,$c1];
    foreach($tVehicule as $vehicule){
        $vehicule->planifierRevision();
        echo RC;
    }
?>