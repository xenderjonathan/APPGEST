<?php
include  'php/db.php';
$appareils = $conn->query("SELECT * FROM appareils ORDER BY appareil_id");

$app = [];
if ($appareils->rowCount() >= 1) {
    $app = $appareils->fetchAll();
} else {
    echo " Aucun appareil";
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>GESTION DES APPARREILS VERSION 2</h1>
    <hr>
    <div class="button_lien">
        <div class="lien_a">
            <a href="add_device.php">AJOUTER</a>
        </div>
        <div class="lien_b">    
            <a href="delete_device.php">SUPPRIMER</a>
        </div>
    </div>
    <div class="affichage">
        <h2>Liste des appareils</h2>
        <div class="app">
            <table>
                <tr>
                    <th>N°</th>
                    <th>NOM</th>
                    <th>DESCRIPTION</th>
                    <th>IMEI</th>
                    <th>TYPE</th>
                    <th>MODIFIER</th>

                </tr>
                <?php
                foreach ($app as $key => $value) {
                    $n = $key + 1;

                    echo
                    <<<HTML
                        <tr>
                            <td> $n </td>
                            <td>$value[1] </td>
                            <td>$value[2]</td>
                            <td>$value[3]</td>
                            <td>$value[4]</td>
                            <td> <a href="update_device.php?id=$value[0]">Modifier</a></td>
                        </tr>
                    HTML;
                }

                ?>

            </table>


        </div>
    </div>
</body>

</html>