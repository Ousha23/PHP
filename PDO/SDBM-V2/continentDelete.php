<?php
require_once "connectDB.php";
if (isset($_GET["code"])){
    $idToDelete = $_GET["code"];
    try {
        $sql = "SELECT * FROM `continent` WHERE ID_CONTINENT = :id_param";

        $query = $connexion->prepare($sql);

        $query->bindParam('id_param', $idToDelete, PDO::PARAM_INT);

        $query->execute();
        $records = $query->fetchAll(PDO::FETCH_ASSOC);
        $codeContinent = $records[0]["ID_CONTINENT"];
        $nomContinent = $records[0]["NOM_CONTINENT"];
        $content = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
   <strong>Attention!</strong> Avant de supprimer vérifiez.
   <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
 </div>";
       
    } catch (Exception $e) {
        echo $e->getMessage();
    } 
} if (isset ($_POST["code"])){
    $idToDelete = $_POST["code"];
    try {
        $sql = "DELETE FROM `continent` WHERE ID_CONTINENT = :id_param";

        $query = $connexion->prepare($sql);
        $query->bindParam("id_param", $idToDelete,PDO::PARAM_INT);
        $query->execute();
        $content = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Bravo!</strong> Elément bien supprimé.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    } catch (Exception $e){
        echo $e->getMessage();
    }
}