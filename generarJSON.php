<?php


if(isset($_REQUEST['submit'])){

$datos = '';
$nombreArchivo = "clientes.json";

if (is_file($nombreArchivo)){

    $datos = file_get_contents($nombreArchivo);

}



$cadena_json = json_decode($datos,true);



    $otracadena = [$cadena_json];
   



foreach ($_REQUEST as $campos=>$valores){

    if ($campos !="submit"){
        array_push($otracadena, array($campos => $valores));

    }
    

    
}





file_put_contents($nombreArchivo,json_encode($otracadena));

header("Location: http://localhost:3000/clientes.php");

}


?>