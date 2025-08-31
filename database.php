<?php
class database {
    public static function conectar() {
        try {
            $con = new PDO('mysql:host=localhost;dbname=mvc_crud', 'root', '');
            scon ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $con;
        } catch (PDOExeption $e) {
            die("Error de conexion: " . $e->getMessage());
        }
    }
}
?>