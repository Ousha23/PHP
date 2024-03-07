
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


    