<?php
$titre = "Modification d'un continent";
require_once "header.view.php";

require_once "../continentUpdate.php";
echo @$content;
?>
<form action="../continentUpdate.php" method="POST">
    <div class="m-3">
        <label for="idContinent">ID continent :</label>
        <input disabled type="text" name="code" id="idContinent" value="<?php echo $codeContinent ?>">
    </div>
    <div class="m-3">
        <label for="nomContinent">Nom continent :</label>
        <input type="text" name="nomContinent" id="nomContinent" value="<?php echo $nomContinent ?>">
    </div>
    <button class="btn btn-success" type="submit">Valider</button> 
    <a href="continents.view.php">
    <button class="btn btn-danger" type="button">Annuler</button>
</a>
</form>

<?php
require_once "footer.view.php";