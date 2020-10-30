<?php

session_start();
if(isset($_SESSION['usuario'])){
    header('Location: student_home.php');
    die();
}else{
    header('Location: login.php');
}
?>
CREATE TABLE `ottos_26298253_swclas`.`swclas_student` ( `ID` INT(20) NOT NULL AUTO_INCREMENT , `nombre` VARCHAR(40) NOT NULL , `apellido` VARCHAR(40) NOT NULL , `usuario` VARCHAR(40) NOT NULL , `pass` VARCHAR(300) NOT NULL , `correo` VARCHAR(40) NOT NULL , `telefono` VARCHAR(40) NOT NULL , `ultimaclase` DATE NULL DEFAULT CURRENT_TIMESTAMP , `ultimaclasem` VARCHAR(40) NULL , PRIMARY KEY (`ID`)) ENGINE = MyISAM;