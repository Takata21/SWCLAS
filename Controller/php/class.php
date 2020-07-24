<?php
// error_reporting(0);
// header('Content-type: application/json; charste=utf-8');
require_once("../../Model/conexion.php");

$id = filter_var(strtolower($_POST['id']), FILTER_SANITIZE_STRING);
$materia = filter_var(strtolower($_POST['materia']),FILTER_SANITIZE_STRING);
$nombre = filter_var(strtolower($_POST['nombre']),FILTER_SANITIZE_STRING);
$profesor = filter_var(strtolower($_POST['profesor']),FILTER_SANITIZE_STRING);
$fecha = filter_var(strtolower($_POST['fecha']),FILTER_SANITIZE_EMAIL);
// $fecha =str_replace('/','/', date("Y-m-d",strtotime( $_POST['fecha'])));
$tiempo= filter_var(strtolower($_POST['tiempo']),FILTER_SANITIZE_STRING);
$correo = $_POST['correo'];
$idn = (int)$id;
$horar = (int)$tiempo;
$pago = $horar * 25;
    

function validarDatos($materia,$nombre,$profesor,$fecha,$correo){
    if($materia== ""){
        return false;
    }elseif($nombre == ""){
        return false;
    }elseif($profesor == ""){
        return false;
    }elseif($fecha == ""){
        return false;
    }elseif($correo == ""){
        return false;
    }
    
    
    return true;

}

if(validarDatos($materia,$nombre,$profesor,$fecha,$correo)){
    if(!$conexion->errorCode()){
        $respuesta=[
            'error'=>'validar'
        ];
    }else{
        
        $statement = $conexion->prepare( 'INSERT INTO `swclas_class`(ID, materia, estudiante, profesor, fecha, tiempo, costo, correo_estudiante, id_estudiante, estado_de_pago  ) VALUES (null, :materia, :estudiante, :profesor, :fecha,:tiempo, :costo, :correo_estudiante, :id_estudiante, :estado_de_pago)');
        $statement->execute(array(
            ':materia' => $materia,
            ':estudiante' =>$nombre,
            ':profesor' => $profesor,
            ':fecha' => $fecha,
            ':tiempo' => $tiempo,
            ':costo' => $pago,
            ':correo_estudiante' => $correo,
            ':id_estudiante' =>$idn,
            ':estado_de_pago' => 0
        ));

        if($statement->rowCount()<=0){
            $respuesta=[
                'error'=>'row'
            ];

        }
        $respuesta = [];
    }

}else{

    $respuesta=[
        'error'=>'else'
    ];

}


echo json_encode($respuesta);




?>