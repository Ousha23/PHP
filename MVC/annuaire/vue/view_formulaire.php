<?php 

$titre = 'Ajouter Contact';
$titrePage = "Ajouter un nouveau contact à l'annuaire";
require_once "vue/view_header.php";
?>
<form action="index.php?action=liste" method = "post">
    <label for="idNom">Nom : </label>
    <input type="text" name="nom" id="idNom"><br><br>
    <label for="idPrenom">Prénom : </label>
    <input type="text" name="prenom" id="idPrenom"><br><br>
    <label for="idTel">Téléphone : </label>
    <input type="text" name="tel" id="idTel"><br><br>
    <input type="hidden" name="action" value="ajouterContact">
    <input type="submit" value ="Enregistrer">
    <input type="reset" value ="Rénitialiser">
</form>
