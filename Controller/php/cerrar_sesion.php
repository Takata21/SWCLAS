<?php
session_start(['usuario']);
session_destroy();
echo 'hola';
header( 'Location:../../login.php');
?>