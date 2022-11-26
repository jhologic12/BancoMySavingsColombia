<?php

echo "<h1>Las variables Recibas son:</h1>";
foreach ($_POST as $campos=>$valores){

    echo "<br>".$campos."=".$valores;
}


?>