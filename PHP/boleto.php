<?php

$database = explode("\n", file_get_contents('admin/database.txt'));
$contenido = file_get_contents("admin/database.txt");

if (isset($_POST['enviar'])) {

    $i = 0;
    $fila = $_POST['fila'];
    $puesto = $_POST['puesto'];
    $opcion= $_POST['opcion'];

    while ($i != 25) {

        $i++;
        $puestoBusqueda = "$fila : $puesto => ".$database[$i-1][-2];
        $peticion = "$fila : $puesto => $opcion";

        $contenido = str_replace($puestoBusqueda, $peticion, $contenido);
        file_put_contents("admin/database.txt", $contenido);
        
    }
}

# NOTA: Si se encuentra la letra "V" en la cadena no ejecutar, si se encuentra la letra "L" o "R", ejecutar.

?>