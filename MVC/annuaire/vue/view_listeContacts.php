<?php
    $titre = 'Liste Contacts';
    $titrePage = "La liste des contacts";
    require_once "vue/view_header.php";
    try {
        $tContacts = getListContacts();
    } catch (PDOException $e) {
        //afficher l'erreur et arrêter le programme
        die("<h1>Erreur de connexion à la base de donnée</h1>" .$e->getMessage());
    }
    ?>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Téléphone</th>
        </tr>
    <?php foreach ($tContacts as $contact):?>
        <tr>
            <td><?=$contact['nom']?></td>
            <td><?=$contact['prenom']?></td>
            <td><?=$contact['telephone']?></td>
        </tr>
    
    <?php endforeach;?>
    </table>


    