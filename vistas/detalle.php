<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de usuario</title>
</head>
<body>
    <h2>Detalle de usuario</h2>
    <?php if ($usuario): ?>
        <p><strong>ID:</strong><?= $usuario->id?></p>
        <p><strong>Nombre:</strong><?= $usuario->nombre?></p>
        <p><strong>Correo:</strong><?= $usuario->correo?></p>
    <?php else: ?>
        <p>Usuario no encontrado.</p>
    <?php endif;?>
    <a href="index.php">Volver a la lista de usuarios</a>
</body>
</html>