
<ul>
<?php foreach ($tResult as $contact):?>
    <li><?= $contact['nom'].", ".$contact['prenom'].", tel : ".$contact['telephone'] ?></li>    
<?php endforeach;?>
</ul>