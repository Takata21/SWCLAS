<?php
// error_reporting(0);
// header('Content-type: application/json; charste=utf-8');
require_once("../../Model/conexion.php");


$nombre = filter_var(strtolower($_POST['nombre']),FILTER_SANITIZE_STRING);
$apellido = filter_var(strtolower($_POST['apellido']),FILTER_SANITIZE_STRING);
$usuario = filter_var(strtolower($_POST['usuario']),FILTER_SANITIZE_STRING);
$email = filter_var(strtolower($_POST['email']),FILTER_SANITIZE_EMAIL);
$password = $_POST['pass'];
$password = hash('sha512', $password);
$tipo1=1;
    

function validarDatos($nombre,$apellido,$usuario,$email){
    if($nombre== ""){
        return false;
    }elseif($apellido == ""){
        return false;
    }elseif($usuario == ""){
        return false;
    }elseif($email == ""){
        return false;
    }
    
    
    return true;

}

if(validarDatos($nombre,$apellido,$usuario,$email)){
    if(!$conexion->errorCode()){
        $respuesta=[
            'error'=>'validar'
        ];
    }else{
        
        $statement = $conexion->prepare( 'INSERT INTO `swclas_user`(ID, nombre, apellido, usuario, email, pass, tipo) VALUES (null, :nombre, :apellido, :usuario, :email, :pass, :tipo)');
        $statement->execute(array(
            ':nombre' => $nombre,
            ':apellido' => $apellido,
            ':usuario' => $usuario,
            ':email' => $email,
            ':pass' => $password,
            ':tipo'=> $tipo1
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