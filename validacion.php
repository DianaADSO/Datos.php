<?php

$usuario       = $_GET['usuario'];
$clave         = $_GET['clave'];

FUNCTION validacion($usuario, $clave){

    $salida = " ";
    $connexion = new mysqli('localhost','root','root', 'db_proyecto_ddm');
    $consulta  = "SELECT * FROM tb_usuarios WHERE usuario = '$usuario' and clave = '$clave'";
    $resultado = $connexion->query($consulta);


        if($salida = $resultado-> fetch_object() ){

            $salida = "Actualmente ese usuario se encuentra registrado";

            header("location: archivo2.php?usuario=$usuario&clave=$clave");
            
        }else{

                
                $salida = "Actualmente ese usuario no se encuentra registrado";
                header("location: archivo3.php?usuario=$usuario&clave=$clave"); 
        }

        return $salida;
        $connexion->close();

        }


    
    

   
    

echo validacion($usuario, $clave);

?>

