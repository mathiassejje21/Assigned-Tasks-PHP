<?php

if (!empty($_POST["crear"])) {
    $vername = htmlspecialchars(trim($_POST["nombre"]));
    $verdescription = htmlspecialchars(trim($_POST["descripcion"]));


    if (!empty($vername) && !empty($verdescription)) {
        $id = null;
        $nombre = $_POST['nombre'];
        $text = $_POST['descripcion'];

        // Preparar la consulta
        $sql = "INSERT INTO tareas(id, nombre, texttareas) VALUES(?, ?, ?)";
        $stms = $conexion->prepare($sql);

        $stms->bind_param("sss", $id, $nombre, $text);
        $stms->execute();
?>
        <div class="message-correct">Tarea creada correctamente.</div>
    <?php
        $stms->close();
    } else {
    ?>
        <div class="message-error">Rellene todo los campos.</div>
<?php
    }
}
