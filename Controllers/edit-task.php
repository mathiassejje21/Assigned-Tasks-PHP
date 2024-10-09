<?php
if (!empty($_POST["editar"])) {
    $vername = htmlspecialchars(trim($_POST["nombre"]));
    $verdescription = htmlspecialchars(trim($_POST["descripcion"]));


    if (!empty($vername) && !empty($verdescription)) {
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $text = $_POST['descripcion'];

        $sql = "UPDATE tareas SET nombre='$nombre', texttareas='$text' WHERE id='$id' ";
        mysqli_query($conexion, $sql);

?>
        <div class="message-correct">Se edito correctamente.</div>

    <?php
    } else {
    ?>
        <div class="message-error">Rellene todo los campos.</div>

<?php
    }
}
if (isset($_POST["volver"])) {
    header("Location: ../index.php");
}
