<?php
    require_once "connectDB.php";

    // Extraction des données continents depuis la BDD:

    $sql = "SELECT * FROM `continent`";

    $query= $connexion->prepare($sql);
    $query->execute();
    $records = $query->fetchAll(PDO::FETCH_ASSOC);

    $content =  '<table class="table table-striped text-center">
                <tr>
                    <th>ID</th>
                    <th>Nom Continent</th>
                    <th>Action</th>
                </tr>';

    foreach ($records as $record) {
        $content .= "<tr>";
        foreach ($record as $key => $value){
            $content .= "<td>".$value."</td>";
        }
        $code = $record["ID_CONTINENT"];
        $linkUpdate = "continentUpdate.php?code=$code";
        $linkDelete = "continentDelete.php?code=$code";
        $content .= "<td><a href=$linkUpdate><button class='btn btn-warning m-1'>Modifier</button></a>";
        $content .="<a href=$linkDelete><button class='btn btn-danger m-1'>Supprimer</button></a></td>";
        $content .="</tr>";
    }
    $content .= "</table>";
    


