<?php

session_start();
if(isset($_SESSION['usuario'])){
    header('Location: student_home.php');
    die();
}else{
    header('Location: login.php');
}
?>
