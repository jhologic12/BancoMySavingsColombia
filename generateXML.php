<?php


if(isset($_REQUEST['submit'])){

$datos = '';
$nombreArchivo = "clientes.xml";

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

$dom = new DOMDocument();

$rootNode = $dom->appendChild($dom->createElement("cliente"));




foreach ( $otracadena  as $root) {
    if (!empty($root)) {
        $itemNode = $rootNode->appendChild($dom->createElement('row'));
        foreach ($root as $k => $v) {
            $itemNode->appendChild($dom->createElement($k, $v));
        }
    }
}





$dom->formatOutput = true;

$backup_file_name = 'Clientes_' . time() . '.xml';
$dom->save($backup_file_name);

header('Content-Description: File Transfer');
header('Content-Type: application/xml');
header('Content-Disposition: attachment; filename=' . basename($backup_file_name));
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($backup_file_name));
ob_clean();
flush();
readfile($backup_file_name);
exec('rm ' . $backup_file_name);

header("Location: clientes.php");

}

























?>