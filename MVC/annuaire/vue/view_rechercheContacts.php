
<ul>
<?php foreach ($tResult as $contact):?>
    <li><?= $contact['nom'].", ".$contact['prenom'].", tel : ".$contact['telephone'] ?>
    <form action="index.php?action=liste" method="post">
        <input type="submit" value="Supprimer">
        <input type="hidden" name="idContact" value="<?= $contact['id']?>">
        <input type="hidden" name="action" value="delContact">
    </form>
    <form action="index.php?action=modifier" method="post">
        <input type="submit" value="Modifier">
        <input type="hidden" name="idContact" value="<?= $contact['id']?>">
        <input type="hidden" name="nom" value="<?= $contact['nom']?>">
        <input type="hidden" name="prenom" value="<?= $contact['prenom']?>">
        <input type="hidden" name="tel" value="<?= $contact['telephone']?>">
        <input type="hidden" name="action" value="update">
    </form>
    </li>    
<?php endforeach;?>
</ul>