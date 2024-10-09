<?php

if (!empty($_POST["crear"])) {

    $nombre = $_POST['nombre'];
    $text = $_POST['descripcion'];

    // Preparar la consulta
    $sql = "INSERT INTO tareas(nombre, texttareas) VALUES(?, ?)";
    $stms = $conexion->prepare($sql);

    $stms->bind_param("ss", $nombre, $text);
    $stms->execute();

    echo '<div>Creado Correctamente</div>';
    $stms->close();
}
