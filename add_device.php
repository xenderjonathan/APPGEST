

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
        <h2>AJOUTER UN APPAREIL</h2>
        <form action="php/add.php" method="post">

            <div class="form_input">
                <input type="text" id="nom" name="nom_app" placeholder="Nom" required><br>
                <input type="text" id="description" name="des_app" placeholder="Description" required><br>
                <input type="number" id="description" name="imei_app" placeholder="Imei" required><br>
                <input type="text" id="type" name="type_app" placeholder="Type" required><br>
            </div>

            <button type="submit">Ajouter</button>


        </form>
    </div>
</body>
</html>