<?php
error_reporting(0);
header('Content-type: application/json; charste=utf-8');
require_once("../../Model/conexion.php");

if (!$conexion->errorCode()) {
    $respuesta=[
        'error'=>true
    ];
}else{
    $statement=$conexion->prepare('SELECT * FROM `swclas_user` ');
    $statement->execute();
    $respuesta = [];

    while($fila = $statement->fetch(PDO::FETCH_ASSOC)){
        $usuario = [
            'id' => $fila['ID'],
            'nombre' => $fila['nombre'],
            'apellido' => $fila['apellido'],
            'usuario' => $fila['usuario'],
            'correo' => $fila['email'],
            'tipo' => $fila['tipo']


        ]; 
        array_push($respuesta, $usuario);

    }

}

echo json_encode($respuesta);


?>