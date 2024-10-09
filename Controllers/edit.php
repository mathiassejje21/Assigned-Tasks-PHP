<?php
require_once("../Controllers/conexion.php");
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM tareas WHERE id = '$id'";
    $query = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_array($query);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/style.css">
    <title>Assigned Tasks | Programming</title>
</head>

<body>
    <div class="containerPrincipal">
        <header> | Update Tasks | </header>
        <section class="cotainerAssigned">
            <p>Modific Tasks</p>
            <?php
            require_once("./conexion.php");
            require_once("./edit-task.php");
            ?>
            <form action="" method="post">
                <input type="hidden" value="<?= $row['id'] ?>">
                <input name="nombre" class="nametarea" maxlength="30" type="text" value="<?= $row['nombre'] ?>" placeholder="Nombre de la tarea">
                <textarea name="descripcion" rows="4" placeholder="Descripcion"><?= $row['texttareas'] ?></textarea>
                <div class="buttons">
                    <input name="volver" id="button-volver" type="submit" value="Volver">
                    <input name="editar" id="button" type="submit" value="Editar">
                </div>
            </form>
        </section>

    </div>

    <?php
    include("../Layout/footer.php")
    ?>