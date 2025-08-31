<?php
/* Conexión a la base de datos usando PDO */
class Database {
    public static function conectar() {
        try {
            $con = new PDO("mysql:host=localhost;dbname=mvc_crud;charset=utf8", "root", "");
            $con ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $con;
        } catch (PDOExeption $e) {
            die("Error de conexion: " . $e->getMessage());
        }
    }
}
?>