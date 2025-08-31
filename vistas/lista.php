<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios</title>
</head>
<body>
    <!-- Listado de usuarios -->
    <h2>Listado de Usuarios</h2>
    <a href="index.php?action=formulario">Agregar Usuario</a>
    <a href="logout.php">Cerrar Sesion</a>
    <br><br>
    <?php
    if (isset($usuarios) && is_array($usuarios) && count($usuarios) > 0):?>
        <table border="1" cellpadding="5" >
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
            <!-- Iterar sobre los usuarios y mostrar sus datos -->
            <?php foreach ($usuarios as $u): ?>
                <tr>
                    <td><?= htmlspecialchars($u->id) ?></td>
                    <td><?= htmlspecialchars($u->nombre) ?></td>
                    <td><?= htmlspecialchars($u->correo) ?></td>
                    <td>
                        <!-- Enlaces para ver, editar y eliminar usuario -->
                        <a href="index.php?action=detalle&id=<?= $u->id ?>">Ver</a>
                        <a href="index.php?action=formulario&id=<?= $u->id ?>">Editar</a>
                        <a href="index.php?action=eliminar&id=<?= $u->id ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?');">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <!-- Mensaje si no hay usuarios -->
        <?php else: ?>
            <p>No hay usuarios registrados.</p>
        <?php endif; ?>
</body>
</html>