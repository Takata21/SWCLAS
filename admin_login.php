<?php

session_start();
require_once("./Model/conexion.php");
if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
    die();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password = hash('sha512', $password);

    $statement = $conexion->prepare('SELECT * FROM `swclas_user` WHERE usuario = :usuario AND pass = :password');
    $statement->execute(array(
        ':usuario' => $usuario,
        ':password' => $password
    ));

    $resultado = $statement->fetch();
    if ($resultado != false) {
        $_SESSION['usuario'] = $usuario;
        header('Location: admin_panel.php');
    } else {
        $errores = '<li>Datos incorrectos</li>';
    }
}


require_once 'Views/admin_login.view.php';


?>