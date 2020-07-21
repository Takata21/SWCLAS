<?php
// echo 'hola mundo';
require_once("config.php");
        try {
            $conexion= new PDO(DB_DNS,DB_USUARIO,DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES\'UTF8\''));
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'conexion exitosa';
            

        } catch (PDOException $e) {
            echo 'Fallo en la conexion'.$e->getMessage();
            die();
            //throw $th;
        }
?>