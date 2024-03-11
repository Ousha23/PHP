<?php if ($rep){ 
   echo '<h2 style="color: green">'.$msg.'</h2>';
} else if ($dErreur){
    echo "<h2>Erreur : $e->getMessage()</h2>";
} else echo "<h2>L'opération a échoué</h2>";
