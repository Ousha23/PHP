<?php
    $titre = 'Liste Contacts';
    $titrePage = "La liste des contacts";
    $liste = getListContact();
            ?>
            <table>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Téléphone</th>
                </tr>
            <?php
            foreach ($liste as $ligne):?>
                <tr>
                    <td><?=$ligne['nom']?></td>
                    <td><?=$ligne['prenom']?></td>
                    <td><?=$ligne['telephone']?></td>
                </tr><br>
            </table>
            <?php endforeach;


    