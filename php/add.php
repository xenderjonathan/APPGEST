<?php

if (isset($_POST["nom_app"]) && isset($_POST["des_app"]) && isset($_POST["imei_app"]) && isset($_POST["type_app"])) {
    try {
        include "db.php";
        $imei = (int) $_POST["imei_app"];
        $appareil = $conn->prepare("INSERT INTO  appareils (appareil_nom,appareil_description,appareil_imei,appareil_type) VALUES(?,?,?,?)");
        $appareil->execute([$_POST["nom_app"], $_POST["des_app"], $imei, $_POST["type_app"]]);
        header("location: ../");
    } catch (\Throwable $th) {

        echo "Une erreur est survenu : $th";
    }
}
