<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, text/html">
    <title>
        <?php if (!(isset($_SESSION["nom"])))
        {
            echo "ERREUR login!";
        }
        else
        {
            echo "Au menu ...";
        }
        ?></title>
</head>
<body>
<?php if (!(isset($_SESSION["nom"])))
        {
?>
            <h1>ERREUR login : vous n'avez pas droit d'accès</h1>
            <p><a href="login.html">Retour à la page d'accueil</a></p>
<?php        
        }
        else
        { 
?>
        <h1>Au menu du jour pour vous, <?php echo $_SESSION["nom"];?> </h1>
        <ul>
            <li><a href="">Sommaire</a></li>
            <li>Et aussi ..</li>
            <li>Et encore ..</li>
            <li>Et pour finir</li>
        </ul>
<?php       
        }
?>
               
</body>
</html>