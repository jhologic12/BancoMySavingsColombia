<?php

if(isset($_REQUEST['submit'])){

   include("conexion/conexion.php");
   /* capturar los datos suministrados por el formulario de clientes y se guardan en una variable*/
   $txtFechaNacimiento=(isset($_POST['Fecha_Nacimiento']))?$_POST['Fecha_Nacimiento']:"";
   
   /*$old_date = explode('-', $txtFechaNacimiento); */
   $txtIdentificacion=(isset($_POST['Numero_de_Documento']))?$_POST['Numero_de_Documento']:"";
   $txttipoDocumento=(isset($_POST['tipoIdentificacion']))?$_POST['tipoIdentificacion']:"";
   $txtNombreCompleto=(isset($_POST['Nombre_y_Apellidos_Completos']))?$_POST['Nombre_y_Apellidos_Completos']:"";
   $txtCiudad=(isset($_POST['Ciudad_de_Residencia']))?$_POST['Ciudad_de_Residencia']:"";
   $txtDepartamento=(isset($_POST['Departamento_Residencia']))?$_POST['Departamento_Residencia']:"";
   $txtDireccion=(isset($_POST['Direccion_Residencia']))?$_POST['Direccion_Residencia']:"";
   $txtCelular=(isset($_POST['Numero_Celular']))?$_POST['Numero_Celular']:"";
   $txtEstadoCivil=(isset($_POST['Estado_Civil']))?$_POST['Estado_Civil']:"";
   $txtCorreo=(isset($_POST['correo_electronico']))?$_POST['correo_electronico']:"";
   
      /*Crear un objeto a partir de la instancia $pdo  y asignamos a un objeto cadena */
      $cadena=$pdo->prepare("INSERT INTO clientes(identificacion,tipoIdentificacion,nombres,fechaNacimiento,ciudad,departamento,direccion,celular,estadoCivil,correo) VALUES (:identificacion,:tipoIdentificacion,:nombres,:fechaNacimiento,:ciudad,:departamento,:direccion,:celular,:estadoCivil,:correo)");
   
      /*Pasamos los valores que tenemos almacenados en las variables temporales*/
   
      $cadena->bindParam(':identificacion',$txtIdentificacion);
      $cadena->bindParam(':tipoIdentificacion',$txttipoDocumento);
      $cadena->bindParam(':nombres',$txtNombreCompleto);
      $cadena->bindParam(':fechaNacimiento',$txtFechaNacimiento);
      $cadena->bindParam(':ciudad',$txtCiudad);
      $cadena->bindParam(':departamento',$txtDepartamento);
      $cadena->bindParam(':direccion',$txtDireccion);
      $cadena->bindParam(':celular',$txtCelular);
      $cadena->bindParam(':estadoCivil',$txtEstadoCivil);
      $cadena->bindParam(':correo',$txtCorreo);
   
      $cadena->execute();
   

}

header("Location: clientes.php");


/* Realizamos la conexiÃ³n a la base de Datos. */








?>