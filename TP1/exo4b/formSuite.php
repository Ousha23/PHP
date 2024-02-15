<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
</head>
<body>
<?php 
$tableauCentres = [];
$situation = '';
session_start();

if (isset($_GET["nom"]) && !empty($_GET["nom"])) {
    $_SESSION["nom"] = $_GET["nom"];
    $_SESSION["age"] = $_GET["age"];
    $_SESSION["centre"] = $_GET["centre"];
    $_SESSION["situation"] = $_GET["situation"];
    if (isset($_SESSION["situation"])){
        if ($_SESSION["situation"] == "marie") {
            $situation = "marié(e)";
        }
        else if ($_SESSION["situation"] == "veuf") {
            $situation = "veuf(ve)";
        }
        else if ($_SESSION["situation"] == "celib") {
            $situation = "célibataire";
        }
    }
    if (isset($_SESSION["centre"])){
        foreach ($_SESSION["centre"] as $valCentres){
            if ($valCentres == "internet") {
                $tableauCentres[] = "Internet";
            }
            else if ($valCentres == "jeux") {
                $tableauCentres[] = "Jeux Vidéos";
            }
            else if ($valCentres == "micro"){
                $tableauCentres[] = "Micro Informatique";
            }
        }
    }
    echo "<p>Merci à vous ".$_SESSION["nom"]."!</br>Vous avez donc le bel âge de ".$_SESSION["age"]."ans. Vous êtes ".$situation.". Et vous vous intérerssez à ".implode(", ",$tableauCentres).".</p>";
} else {
    session_destroy();
    echo "<p>Merci de renseigner les champs, vous serez rediriger dans 5 secondes</p>";
    echo '<meta http-equiv="refresh" content="5;URL=form.html"> ';
}
?>
</body>
</html>
