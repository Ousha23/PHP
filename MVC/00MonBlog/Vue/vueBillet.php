<?php $this->titre = "Mon Blog"; ?>

<article>
    <header>
        <h1 class="titreBillet"><?= $billet['titre']?></h1>
        <time><?= $billet['date']?></time>
        <p><?= $billet['contenu']?></p>
    </header>
</article>
<hr/>
<header>
    <h1 id="titreReponses">Réponses à <?= $billet['titre']?></h1>
</header>
<?php 
    foreach ($commentaires as $commentaire):?>
        <p><?=$commentaire['auteur']?> dit :</p>
        <p><?=$commentaire['contenu']?></p>
    <?php endforeach;
