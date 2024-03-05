<?php
$titre = 'Mon Blog';

ob_start();
foreach ($billets as $billet): ?>
    <article>
        <header>
            <a href="<?= "billet.php?id=".$billet['id']?>">
            <h1 class="titreBillet"><?= $billet['titre'] ?></h1></a>
            <time><?= $billet['date'] ?></time>
        </header>
            <p><?= $billet['contenu'] ?></p>
    </article>
    <hr />
<?php endforeach; 
$contenu = ob_get_clean();

require_once 'gabarit.php';
?>

        