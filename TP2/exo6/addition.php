<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addition</title>
</head>
<body>
    <?php 
    $nbraleatoire = rand(0, 100);
    $totalrandom = rand($nbraleatoire, 1000);
    $nbrManquant = '';
    $action = true;

    if (isset($_GET["nbr2"])) {
        $nbraleatoire = $_GET["nbr1"];
        $nbrManquant = $_GET["nbr2"];
        $totalrandom = $_GET["total"];

        if (($nbraleatoire + $nbrManquant) == $totalrandom) {
            echo '<h1>Vous avez gagné</h1>
            <h2>'.$nbraleatoire. ' + '.$nbrManquant.' = '.$totalrandom.'</h2>';
            $action = false;
        } else {
            echo "<h2>ERREUR : ".$nbraleatoire. ' + '.$nbrManquant.' = '.$totalrandom." est faux!</h2>";
        }
    } 
    if ($action){
        echo '<form action="" method="get">'
            .$nbraleatoire. ' + '.'<input type="text" name="nbr2" value="'.$nbrManquant.'" required>' .' = '.$totalrandom.'
            <input type="hidden" name="nbr1" value="'.$nbraleatoire.'">
            <input type="hidden" name="total" value="'.$totalrandom.'">
            <input type="submit" value="Test"><br>
        </form>';
    } 
    echo '<form action="" method="get">
    <input type="submit" value="Recommencer"><br>
    </form>'
    ?>
</body>
</html>