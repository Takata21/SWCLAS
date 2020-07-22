<?php
// error_reporting(0);
// header('Content-type: application/json; charste=utf-8');
require_once("../../Model/conexion.php");


$id = filter_var(strtolower($_POST['id']),FILTER_SANITIZE_STRING);
$ID = (int)$id;

    



if(is_numeric($ID)){
    if(!$conexion->errorCode()){
        $respuesta=[
            'error'=>'validar'
        ];
    }else{
        
        $statement = $conexion->prepare( 'DELETE FROM `swclas_user` WHERE `swclas_user`.`ID` =:ID');
        $statement->execute(array(
            ':ID' => $ID
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