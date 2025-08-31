<?php 
require_once 'database.php';
class usuario{
    public static function obtenerTodos(){
        $db = database::conectar();
        $stmt = $db->query("SELECT * FROM usuarios");
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public static function obtenerPorId($id){
        $db = database::conectar();
        $stmt = $db->prepare("SELECT * FROM usuarios WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    public static function insertar($nombre, $correo){
        $db = database::conectar();
        $stmt = $db->prepare("INSERT INTO usuarios (nombre, correo) VALUES (?, ?)");
        return $stmt->execute([$nombre, $correo]);
    }
    public static function actualizar($id, $nombre, $correo){
        $db = database::conectar();
        $stmt = $db->prepare("UPDATE usuarios SET nombre = ?, correo = ? WHERE id = ?");
        return $stmt->execute([$nombre, $correo, $id]);
    }
    public static function eliminar($id){
        $db = database::conectar();
        $stmt = $db->prepare("DELETE FROM usuarios WHERE id = ?");
        return $stmt->execute([$id]);
    }    
}
?>