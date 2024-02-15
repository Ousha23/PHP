<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP page</title>
</head>
<body>
    <h2>exo 1</h2>
    <?php

        for ($i = 5; $i >= 1; $i--){
            echo "<H$i>Hello world !!</H$i>";
        }
        print ("<hr>");
    ?>

    <h2>exo 2</h2>
    <?php
        $date = getdate();
        //print_r($date);

        //print_r($_SERVER);
        
        echo "<h3>En ce ".$date["mday"]." ".$date["month"]." ".$date["year"].", sur le serveur, ".$_SERVER["SERVER_NAME"] ." il est ".$date["hours"]."h et ".$date["minutes"]."min.</h3>";

        //echo "<P>TEST ".getenv("SERVER_NAME")."</P>";
    ?>

    <table border="1">
    <?php    
        foreach ($_SERVER as $item => $valeur){
            echo "
                <tr>
                    <td>$item</td>
                    <td>$valeur</td>
                </tr>";
        }
    ?>
    </table>
    
</body>
</html>