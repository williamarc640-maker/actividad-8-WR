<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $usuario ? 'Editar' : 'Agregar'?>Usuario</title>
</head>
<body>
    <h2><?= $usuario ? 'Editar' : 'Agregar'?>Usuario</h2>
    <form action="index.php?action=guardar" method="post">
      <input type="hidden" name="id" value="<?= $usuario->id ?? '' ?>">
        <label >Nombre:</label><br>
    <input type="text" name="nombre" value="<?= $usuario->nombre ?? '' ?>" required><br><br>
        <label >Correo:</label><br>
    <input type="email" name="  correo" value="<?= $usuario->correo ?? '' ?>" required><br><br>
        <button type="submit">Guardar</button>
        <a href="index.php">Cancelar</a>
    </form>
</body>
</html>