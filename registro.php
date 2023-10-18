<?php

INCLUDE('encriptar.php');

function registrar_personas( $nombres, $usuario, $email,  $clave){


    $connexion = new mysqli('localhost', 'root', 'root', 'db_proyecto_ddm');
    $consulta  = "INSERT INTO tb_usuarios ( nombres, usuario,email, clave) values ('$nombres', '$usuario', '$email',  '$clave')";
    $resultado = $connexion->query($consulta);


    $connexion->close();


}

echo registrar_personas('Lucia', 'camilofi', 'camilo@gmail.com','18');

?>