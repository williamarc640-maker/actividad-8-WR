<?php
require_once 'usuario.php';
class controlador {
    public function listar() {
        $usuarios = usuario::obtenerTodos();
        include 'vistas/listar.php';
    }
    public function detalle($id) {
        $usuario = usuario::obtenerPorId($id);
        include 'vistas/detalle.php';
    }
    public function formulario($id = null) {
        $usuario = $id ? usuario::obtenerPorId($id) : null;
        include 'vistas/formulario.php';
    }
    public function guardar($dato) {
        if (!empty($dato['id'])) {
            usuario::actualizar($dato['id'], $dato['nombre'], $dato['correo']);
        } else {
            usuario::insertar($dato['nombre'], $dato['correo']);
        }
        header("Location: index.php");
        exit();
    }
    public function eliminar($id) {
        usuario::eliminar($id);
        header("Location: index.php");
        exit();
    }
}
?>