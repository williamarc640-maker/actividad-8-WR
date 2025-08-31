<?php
/* Controlador que maneja las solicitudes y coordina entre el modelo y la vista */
require_once 'usuario.php';
class Controlador {
    public function listar() {
        /* Obtener todos los usuarios */
        $usuarios = Usuario::obtenerTodo();
        include 'vistas/lista.php';
    }
    /* Mostrar detalle de un usuario */
    public function detalle($id) {
        $usuario = Usuario::obtenerPorId($id);
        include 'vistas/detalle.php';
    }
    /* Mostrar formulario para agregar o editar usuario */
    public function formulario($id = null) {
        $usuario = $id ? Usuario::obtenerPorId($id) : null;
        include 'vistas/formularios.php';
    }
    /* Guardar usuario (insertar o actualizar) */
    public function guardar($dato) {
        if (!empty($dato['id'])) {
            Usuario::actualizar($dato['id'], $dato['nombre'], $dato['correo']);
        } else {
            Usuario::insertar($dato['nombre'], $dato['correo']);
        }
        header("Location: index.php");
        exit();
    }
    /* Eliminar usuario */
    public function eliminar($id) {
        Usuario::eliminar($id);
        header("Location: index.php");
        exit();
    }
}
?>