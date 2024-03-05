<?php
    $titre = "Mon Blog";

    ob_start()
?>
<p>Une Erreur est survenu : <?php echo $msgErreur ?></p>
<?php 
    $contenu = ob_get_clean();
    require 'gabarit.php';
?>
