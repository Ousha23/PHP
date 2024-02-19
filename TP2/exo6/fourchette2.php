<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fourchette inversée</title>
</head>
<body>
    
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    session_start();
    $limiteChoisi = 0;
    $action = 'debut';
    $choixSys = 0;
    $choixTemp = array();
    $tentative =1;

    if (isset($_POST["limiteChoix"])){
        $action = 'encours';
        $limiteChoisi = $_POST["limiteChoix"];
        $choixSys = mt_rand(0,$limiteChoisi);
        $choixTemp[0] = 0;
        $choixTemp[1] = $limiteChoisi;
        $_SESSION["choixTempSess"] = $choixTemp;
    } 
    
    if (isset($_POST["test"])){
        $action = 'encours';
        $limiteChoisi = $_POST["limite"];
        $choixSys = $_POST["choixSys"];
        $tentative = $_POST["tentative"];
        $choixTemp=$_SESSION["choixTempSess"];
    
        if ($_POST["test"] == "Trop petit"){
            if ($choixTemp[0] < $choixSys){
                $choixTemp[0] = $choixSys+1;
            }
            if ($choixTemp[0] >= $choixTemp[1]) {
                echo "Vous avez triché";
                $action = 'fin';
            } else {
                $choixSys = mt_rand($choixTemp[0], $choixTemp[1]); 
                $tentative++;
            }
        } else if ($_POST["test"] == "Trop grand") {
            if ($choixTemp[1] > $choixSys){
                $choixTemp[1] = $choixSys-1; 
            }
            if ($choixTemp[0] == $choixTemp[1]) {
                echo "Vous avez triché";
                $action = 'fin';
            } else {
                $choixSys = mt_rand($choixTemp[0], $choixTemp[1]);
                $tentative++;
            }
        } else {
            $action = 'fin';
            $tentative = 0;
            echo "<h2>Bravo! Vous avez trouvé le nombre $choixSys!</h2>";
        } 
        $_SESSION["choixTempSess"] = $choixTemp;
    }
    
    if ($action== 'debut') {
        echo '
        <form action="#" method="post">
            <p>Sélectionner la limite supérieure, puis quand vous avez choisi le nombre non nul que je dois deviner (sans me le dire) cliquer sur "Commencer"</p>
            <label for="idLimite">Choisissez la limite supérieure : </label>
            <select name="limiteChoix" id="idLimite">
                <option value="10">10</option>
                <option value="100">100</option>
                <option value="1000">1000</option>
            </select>
            <input type="submit" value="Commencer">
        </form>';
    } else if ($action== 'encours' ){
        print_r($choixTemp);
        echo '<p>Mon essaie n°'.$tentative.' est le nombre '.$choixSys.'</p>
        <form action="#" method="post">
            <input type="hidden" name="limite" value="'.$limiteChoisi.'">
            <input type="hidden" name="choixSys" value="'.$choixSys.'">
            <input type="hidden" name="tentative" value="'.$tentative.'">
            <input type="submit" name="test" value="Trop petit">
            <input type="submit" name="test" value="Trop grand">
            <input type="submit" name="test" value="GAGNÉ!!">
        </form>';
    }
    if ($action!= 'debut'){
        echo '<form action="" method="post">
        <input type="submit" value="Recommencer"><br>
        </form>';
    }
    ?>
</body>
</html>