<?php

/* 🦍

Nombre: Frey Alexander Usuga Carreño 
Programa: Fundamentos de programación
Taller: Uso de formularios para transferencia

*/

# Obtenemos la información de database.txt,
# guardamos la información en un array,
# cada elemento estará separado por cada salto de línea.   
$database = explode("\n", file_get_contents('admin/database.txt'));

# Nuevamente obtenemos la información de database.txt, solo que en "forma de cadena"
$contenido = file_get_contents("admin/database.txt");

# Si hay envio de información
if ($_POST) {
    
    # Si el botón de 'enviar' es accionado
    if (isset($_POST['enviar'])) {
    
        # Verificamos si se marcó una opción
        if (isset($_POST['opcion'])) {
    
            $i = 0;
            $a = 0;
            $numeroPuestos = 25;
        
            $fila = $_POST['fila'];
            $puesto = $_POST['puesto'];
            $opcion= $_POST['opcion'];
            
            # el contenido de database.txt pasará a ser un array asociativo.
            while ($i != $numeroPuestos) {
        
                $i++;                                                                       # $i incrementa su valor dependiendo de las veces que se ejecute el ciclo.
                $valor = $database[$i-1][-1];                                               # recorremos la información de $database y la guardamos como valor.
                $llave = substr($database[$i-1], 0, -2);                                    # esto devuelve por ejemplo "1 : 1" ("fila : puesto"), lo cual usaremos como llave.
        
                $newDB["$llave"] = "$valor";                                                # finalmente transformamos el contenido de database.txt en un array asociativo.
                
            }
        
            while ($a != $numeroPuestos) {
        
                $a++;                                                                       # $a incrementa su valor dependiendo de las veces que se ejecute el ciclo
                $puestoBusqueda = "$fila : $puesto ".$database[$a-1][-1];                   # recorremos la información de $database hasta que sea igual a la fila y puesto que buscamos
                $peticion = "$fila : $puesto $opcion";                                      # guardamos el puesto que se desea alterar y la opción que el usuario desea
        
                # si el usuario ingresa un puesto válido
                if (isset($newDB["$fila : $puesto"])) {
                    
                    # si el valor de la llave es diferente de V (vendido)
                    if ($newDB["$fila : $puesto"] !== "V") {
        
                        $contenido = str_replace($puestoBusqueda, $peticion, $contenido);   # modificamos la información de acuerdo a lo que se haya solicitado
                        file_put_contents("admin/database.txt", $contenido);                # confirmamos la modificación
                        header("refresh:0");                                                # recargamos la página
                        
                    } else {
        
                        ?><script>swal("Ese puesto ya fue comprado", "", "error");</script><?php 
                        break;  
        
                    }
                        
                } else {
                    
                    ?><script>swal("Puesto no encontrado", "", "error");</script><?php 
                    break;
                    
                }
                
            } 
        
        } else {
            
            ?><script>swal("Selecciona una opción", "", "warning");</script><?php 
    
        }
        
    }
    
    # si el botón de borrar es accionado
    if (isset($_POST['borrar'])) {
    
        # recargamos la página 
        header("refresh:0");
    
    }

}

?>