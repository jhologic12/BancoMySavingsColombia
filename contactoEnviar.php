<?php


if(isset($_REQUEST['submit'])){

    include("conexion/conexion.php");
    $txtNombre=(isset($_POST['nombre']))?$_POST['nombre']:"";
    $txtEmail=(isset($_POST['email']))?$_POST['email']:"";
    $txtAsunto=(isset($_POST['asunto']))?$_POST['asunto']:"";
    $txtMensaje=(isset($_POST['mensaje']))?$_POST['mensaje']:"";



    
       /*Crear un objeto a partir de la instancia $pdo  y asignamos a un objeto cadena */
       $cadena=$pdo->prepare("INSERT INTO cliente(nombre,email,asunto,mensaje) VALUES (:nombre,:email,:asunto,:mensaje)");
    
       /*Pasamos los valores que tenemos almacenados en las variables temporales*/
    
       $cadena->bindParam(':nombre',$txtNombre);
       $cadena->bindParam(':email',$txtEmail);
       $cadena->bindParam(':asunto',$txtAsunto);
       $cadena->bindParam(':mensaje',$txtMensaje);


       var_dump($cadena);

       $cadena->execute();
    
 
 }
 
 header("Location: contacto.php?enviado=true");
 


?>