<?php
class OBJElementosForm {
function _construct(){
}

function crearTipoDocumento ($lista,$nombre){


    $cadenaInicio= '<select name= "'.$nombre.'">';
    $opcion = "";
    foreach ($lista as $valor)
    {
        
        $opcion = "<option>".$valor."</option>".$opcion;
    }
    $cadenaFinal="</select>";
    $listaSelect=$cadenaInicio.$opcion.$cadenaFinal;
    return $listaSelect;
    }

function CrearTypeFecha ($lista){

    $opcion = "";
    foreach ($lista as $valor)
    {
        
    $texto = '<label>'.$valor.'</label>';
    
    $opcion = "$texto <input type='date' id='$valor'name='$valor''value='$valor'><br> $opcion";
    }
    
    return $opcion;
    }



function CrearTypeCheckbox ($lista){

    $opcion = "";
    foreach ($lista as $valor)
    {
        
    $texto = '<label>'.$valor.'</label>';
    
    $opcion = "$texto <input type='checkbox' id='$valor'name='$valor''value='$valor'><br> $opcion";
    }
    
    return $opcion;
    }








function CrearTypeInputText ($Lista){
$opcion = "";
foreach ($Lista as $valor)
{
    
$texto = '<label>'.$valor.'</label>';

$opcion = "$texto <input type='text'  id='$valor'name='$valor'><br> $opcion";
}

return $opcion;
}


function CrearTypeInputNumber ($Lista){
    $opcion = "";
    foreach ($Lista as $valor)
    {
        
    $texto = '<label>'.$valor.'</label>' ;
    
    $opcion = "$texto <input type='number'  id='$valor'name='$valor'><br> $opcion";
    }
    
    return $opcion;
    }
}



?>