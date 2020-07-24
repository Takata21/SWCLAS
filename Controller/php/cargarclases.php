<?php
error_reporting(0);
header('Content-type: application/json; charste=utf-8');
require_once("../../Model/conexion.php");
$id=$_POST['id'];
$idn = (int)$id;

if (!$conexion->errorCode()) {
    $respuesta=[
        'error'=>true
    ];
}else{
    $statement=$conexion->prepare('SELECT * FROM `swclas_class` WHERE id_estudiante =:id');
    $statement->execute(array(
        ':id' => $idn
    ));
    $respuesta = [];

    while($fila = $statement->fetch(PDO::FETCH_ASSOC)){
        $usuario = [
            'id' => $fila['ID'],
            'materia' => $fila['materia'],
            'estudiante' => $fila['estudiante'],
            'profesor' => $fila['profesor'],
            'fecha' => $fila['fecha'],
            'tiempo' => $fila['tiempo'],
            'costo' => $fila['costo'],
            'correo_estudiante' => $fila['correo_estudiante'],
            'id_estudiante' => $fila['id_estudiante'],
            'estado_pago' => $fila['estado_de_pago']


        ]; 
        array_push($respuesta, $usuario);

    }

}
// $respuesta=[
//     'prueba'=>'hola'
// ];
echo json_encode($respuesta);


?>