
<form action="index.php?action=liste" method = "post">
    <?php if ($action == 'modifier') { ?>
        <label for="idNom">Nom : </label>
        <input type="text" name="nom" id="idNom" value="<?=$nom?>" ><br><br>
        <label for="idPrenom">Prénom : </label>
        <input type="text" name="prenom" id="idPrenom" value="<?= $prenom ?>"><br><br>
        <label for="idTel">Téléphone : </label>
        <input type="text" name="tel" id="idTel" value="<?= $tel ?>"><br><br>
        <input type="submit" value ="Valider">
        <input type="hidden" name="idContact" value ="<?= $id ?>">
        <input type="hidden" name="action" value ="updContact">
    <?php } else {?>
        <label for="idNom">Nom : </label>
        <input type="text" name="nom" id="idNom"  ><br><br>
        <label for="idPrenom">Prénom : </label>
        <input type="text" name="prenom" id="idPrenom"><br><br>
        <label for="idTel">Téléphone : </label>
        <input type="text" name="tel" id="idTel"><br><br>
    <?php } if ($action == 'ajouter'){ ?>
        <input type="submit" value ="Enregistrer">
        <input type="hidden" name="action" value="ajouterContact">
    <?php } else if ($action == 'rechercher') { ?>
        <input type="submit" value ="Rechercher">
        <input type="hidden" name="action" value="searchContact">
    <?php } ?>
        <input type="reset" value ="Rénitialiser">
</form>
