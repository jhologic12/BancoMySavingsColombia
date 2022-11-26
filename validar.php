<?php


if(isset($_REQUEST['submit'])){

try {
    include("conexion/conexion.php");

$usuario = (isset($_POST['usuario']))?$_POST['usuario']:"";
$password =(isset($_POST['password']))?$_POST['password']:"";
$encriptar = sha1($password);

$obtenercliente= $pdo->prepare("SELECT * FROM usuario WHERE nombre = '$usuario' AND contrasenia = '$encriptar'");
$obtenercliente->execute();
$resultado=$obtenercliente->fetchALL(PDO::FETCH_ASSOC);


}
catch (Excepcion $e){
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}



if (empty($resultado)){

    
    header('Location: login.php?fallo=true');
    
    
} else {

   
    session_start();
    $_SESSION['user'] = $usuario;
    header('Location: administrarCuentas.php');
}

}
?>