<?php
include  'php/db.php';
$requet_appareil = $conn->query("SELECT * FROM appareils ORDER BY appareil_id");

$app = [];
if ($requet_appareil->rowCount() >= 1) {
    $app = $requet_appareil->fetchAll();
} else {
    echo " Aucun appareil !";
}



?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="affichage">
        <div class="block_retour_pour_delete">
            <a href="index.php">Retour</a>
        </div>
        <h2>Liste des appareils</h2>
        <div class="app">
            <table>
                <tr>
                    <th>N°</th>
                    <th>NOM</th>
                    <th>DESCRIPTION</th>
                    <th>IMEI</th>
                    <th>TYPE</th>
                    <th>SUPPRIMER</th>

                </tr>
                <?php
                foreach ($app as $key => $value) {
                    $numero = $key + 1;
                    $id = $value[0];
                    echo
                    <<<HTML
                        <tr>
                            <td class="numerotation"> $numero </td>
                            <td>$value[1] </td>
                            <td>$value[2]</td>
                            <td class="numerotation">$value[3]</td>
                            <td>$value[4]</td>
                            <td class="suppr">
                                <div class="div_suppr">
                                    <a href="php/delete.php?id=$id">Supprimer</a>
                                </div>
                            </td>
                        </tr>
                        HTML;
                }

                ?>

            </table>


        </div>
    </div>
</body>

</html>