<?php
try {

    include "php/db.php";
    if (!isset($_GET["id"])) {
        header("location: ./");
    }

    $id = $_GET["id"];

    $requet = $conn->query("SELECT * FROM appareils WHERE appareil_id= $id");
    if ($requet->rowCount() <= 0) {
        header("location: ./");
    }

    $result = $requet->fetch();
    $nom_app = $result[1];
    $des_app = $result[2];
    $imei_app = $result[3];
    $type_app = $result[4];
} catch (PDOException) {
    header("location: ./");
} catch (Throwable $th) {
    echo "Une erreur est survenu : $th";
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
    <div class="block_ajout">
        <a href="index.php">Retour</a>
        <h2>MODIFIER L'APPAREIL</h2>
        <form action="php/update.php" method="post">
            <div class="form_input">
                <?php

                echo
                <<<HTML
                    <input type="hidden" name="id_app" value="$id">
                    <input type="text" id="nom" name="nom_app" placeholder="Nom" value="$nom_app" required><br>
                    <input type="text" id="description" name="des_app" placeholder="Description" value="$des_app" required><br>
                    <input type="number" id="description" name="imei_app" placeholder="Imei" value="$imei_app" required><br>
                    <input type="text" id="type" name="type_app" placeholder="Type" value="$type_app" required><br>
                HTML

                ?>
            </div>

            <button type="submit">Modifier</button>


        </form>
    </div>
</body>

</html>