<?php

$database = explode("\n", file_get_contents('admin/database.txt'));
$contenido = file_get_contents("admin/database.txt");

# Si el botón de 'enviar' es accionado
if (isset($_POST['enviar'])) {

    $i = 0;
    $numeroPuestos = 25;

    $fila = $_POST['fila'];
    $puesto = $_POST['puesto'];
    $opcion= $_POST['opcion'];

    while ($i != $numeroPuestos) {

        $i++;                                                               # $i incrementa su valor dependiendo de las veces que se ejecute el ciclo
        $puestoBusqueda = "$fila : $puesto => ".$database[$i-1][-1];        # recorremos la información de $database hasta que sea igual a la fila y puesto que buscamos
        $peticion = "$fila : $puesto => $opcion";                           # guardamos el puesto que se desea alterar y la opción que el usuario desea
        
        $contenido = str_replace($puestoBusqueda, $peticion, $contenido);   # modificamos la información de acuerdo a lo que se haya solicitado
        file_put_contents("admin/database.txt", $contenido);                # confirmamos la modificación
        header("refresh:0");                                                # recargamos la página
        
    }
}

# NOTA: Si se encuentra la letra "V" en la cadena no ejecutar, si se encuentra la letra "L" o "R", ejecutar.

?>