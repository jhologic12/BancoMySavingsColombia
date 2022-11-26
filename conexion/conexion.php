<?php

$servidor= "mysql:dbname=bnh5zf4mash3xhiifipr;host=bnh5zf4mash3xhiifipr-mysql.services.clever-cloud.com";
$usuario="uhh3jh3a3rv8os8v";
$password="7dfZybxxoYCmPBpArdbP";



try {

    $pdo = new PDO($servidor,$usuario,$password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado..";


} catch (PDOException $e) {


    echo "Conexion mala :(".$e->getMessage();
}

?>