<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu de la fourchette</title>
</head>
<body>
    
<?php

$limiteValue = 0;
$nbrSysteme = 0;
$action = 'debut';
$nbrJoueur = 0;
$tentative = 0;

if (isset($_GET["limite"])) {
    $action = 'encours';
    $limiteValue = $_GET["limite"];

    if ($limiteValue == 10) {
        $nbrSysteme = rand(0,10);
        echo "<p>Le nombre que j'ai choisi est entre 0 et 10</p>";
    } else if ($limiteValue == 100) {
        $nbrSysteme = rand(0,100);
        echo "<p>Le nombre que j'ai choisi est entre 0 et 100</p>";
    } else {
        $nbrSysteme = rand(0,1000);
        echo "<p>Le nombre que j'ai choisi est entre 0 et 1000</p>";
    }
}
if (isset($_GET["nbrSaisi"])) {
    $action = 'encours';
    $nbrJoueur = $_GET["nbrSaisi"];
    $nbrSysteme = $_GET["nbrSysteme"];
    $tentative = $_GET["tentative"];
    if ($nbrJoueur != $nbrSysteme) {
            $tentative += 1;
            if ($nbrJoueur >= $nbrSysteme)
                echo "C'est plus petit. Tentative n°: ".$tentative;
            else {
                echo "C'est plus grand. Tentative n°: ".$tentative;
            }
    } else {
        $tentative = 0;
        $action = 'FIN';
        echo "<h2>Trouvé </h2>";
    }
}
if ($action == 'encours' ) {
    echo '<form action="" method="ge    t">
        <label for="idLimite">Merci de saisir un chiffre: </label>
        <input type="number" name="nbrSaisi" required>
        <input type="hidden" name="nbrSysteme" value="'.$nbrSysteme.'">
        <input type="hidden" name="tentative" value="'.$tentative.'">
        <input type="submit" value="Tester">
    </form>';
} else if ($action == 'debut') {
    echo '<form action="" method="get">
        <label for="idLimite">Choisissez la limite (donc la difficulté): </label>
        <select name="limite" id="idLimite">
            <option value="10">10</option>
            <option value="100">100</option>
            <option value="1000">1000</option>
        </select>
        <input type="submit" value="Commencer">
    </form>';
}
echo '<form action="" method="get">
    <input type="submit" value="Recommencer"><br>
    </form>'
?>
</body>
</html>