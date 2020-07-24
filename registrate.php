<?php
session_start();
require_once("./Model/conexion.php");

if(isset($_SESSION['usuario'])){
    header('Location: index.php');
    die();
}



if($_SERVER['REQUEST_METHOD']== 'POST'){
    echo 'hola';
    $nombre = filter_var(strtolower($_POST['nombre']),FILTER_SANITIZE_STRING);
    $apellido = filter_var(strtolower($_POST['apellido']),FILTER_SANITIZE_STRING);
    $email = filter_var(strtolower($_POST['email']),FILTER_SANITIZE_EMAIL);
    $usuario = filter_var(strtolower($_POST['usuario']),FILTER_SANITIZE_STRING);
    $telefono = filter_var(strtolower($_POST['telefono']),FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    

    $errores = '';


    if(empty($nombre) or empty($apellido) or empty($email) or empty($usuario) or empty($password) or empty($password2) or empty($telefono)){
        $errores = '<li> Por favor rellena todos los datos corrctamentes</li>';
        echo 'hola2';

    }else{
        echo 'hola3';
        $statement = $conexion->prepare('SELECT * FROM `swclas_student` WHERE usuario = :usuario LIMIT 1');
        $statement->execute(array(':usuario'=> $usuario));
        $resultado = $statement->fetch();

        if($resultado != false){
            $errores.= '<li>El nombre de usuario ya existe</li>';
        }

        $password = hash('sha512', $password);
        $password2 = hash('sha512' , $password2);
        
        if($password != $password2){
            $errores.= '<li>Las contraseñas no son iguales</li>';
        }
        echo 'hola4';
    }
    echo 'hola7';
            echo $nombre;
            echo $apellido;
            echo $usuario;
            echo $email;
            echo $password;
            echo '<br>';
            echo $tipo1;


    if ($errores == '') {
        echo 'hola5';


        
        $statement = $conexion->prepare('INSERT INTO `swclas_student`( ID, nombre, apellido, usuario, pass, correo, telefono, ultimaclase,ultimaclasem) VALUES (null, :nombre, :apellido, :usuario, :pass, :correo, :telefono, null, null )');
        echo 'hola6';
        $statement->execute(array(
            ':nombre' => $nombre,
            ':apellido' => $apellido,
            ':usuario' => $usuario,
            ':pass' => $password,
            ':correo' => $email,
            ':telefono'=> $telefono

            
        ));
            




        print_r ($statement);


        header('Location: login.php');
    }

}

require_once 'Views/registrar.view.php';
