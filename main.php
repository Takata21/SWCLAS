<?php




$to = 'takata211011@gmail.com';
$subjet = 'prueba';
$messsage = 'esto es una prueba';
$headers = 'from: swclas211011@gmail.com ';


if(mail($to, $subjet, $messsage, $headers)){
    echo 'mail enviado';
}else{
    echo 'fail';
}
?>