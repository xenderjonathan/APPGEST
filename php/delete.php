<?php
try {

    include "../php/db.php";
    if (!isset($_GET["id"])) {
        header("location: ../delete_device.php");
    }
    $id_app = $_GET["id"];

    $appareil = $conn->query("SELECT * FROM appareils WHERE appareil_id= $id_app");
    if ($appareil->rowCount() == 0) {
        header("location: ../delete_device.php");
    }

    $conn->query("DELETE FROM appareils WHERE appareil_id = $id_app");
    
    header("location: ../delete_device.php");

} catch (Throwable $th) {
    echo "Une erreur est survenu $th";
}
