<?php
require_once('./conexion.php');
if (isset($_GET["id"])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM tareas WHERE id= '$id'";

    mysqli_query($conexion, $sql);

    header("Location: ../index.php");
}
