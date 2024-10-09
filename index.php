<?php
include("./Layout/header.php")
?>

<div class="containerPrincipal">
    <header> | Programming | </header>
    <section class="cotainerAssigned">
        <p>Assigned Tasks</p>
        <?php
        require_once("./Controllers/conexion.php");
        require_once("./Controllers/insert.php") ?>
        <form action="index.php" method="post">
            <input name="nombre" class="nametarea" maxlength="30" type="text" placeholder="Nombre de la tarea" required>
            <textarea name="descripcion" rows="4" placeholder="Descripcion" required></textarea>
            <input name="crear" id="button" type="submit" value="Crear">
        </form>
    </section>
    <section class="containertasks">

    </section>

</div>

<?php
include("./Layout/footer.php")
?>