<?php
include("./Layout/header.php");
?>

<div class="containerPrincipal">
    <header> | Programming | </header>
    <section class="cotainerAssigned">
        <p>Assigned Tasks</p>
        <?php
        require_once("./Controllers/conexion.php");
        require_once("./Controllers/insert.php");

        $sql = "SELECT * FROM tareas";
        $query = mysqli_query($conexion, $sql);
        ?>
        <form action="index.php" method="post">
            <input name="nombre" class="nametarea" maxlength="30" type="text" placeholder="Nombre de la tarea">
            <textarea name="descripcion" rows="4" placeholder="Descripcion"></textarea>
            <input name="crear" id="button" type="submit" value="Crear">
        </form>
    </section>
    <section class="containertasks">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>DESCRIPCION</th>
                    <th> - </th>
                </tr>
            </thead>

            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td class="select-name"><?= $row['nombre'] ?></td>
                        <td><?= $row['texttareas'] ?></td>
                        <td class="select-accion">
                            <div class="acciones">
                                <a href="./Controllers/edit.php?id =<?= $row['id'] ?>" class="accion editar">editar</a>
                                <a href="./Controllers/delete.php?id =<?= $row['id'] ?>" class=" accion eliminar">eliminar</a>
                            </div>

                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </section>

</div>

<?php
include("./Layout/footer.php")
?>