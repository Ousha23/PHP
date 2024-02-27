<?php
$titre = "Continents";
//ajout header
require_once "header.view.php";
echo "<a class ='m-1' href='../continentAdd.php'><button style='width:25em' class='btn btn-primary width'>Ajouter</button></a>";
//ajout détail continents
require_once "../continentsDB.php";
echo $content;
//ajout footer
require_once "footer.view.php";