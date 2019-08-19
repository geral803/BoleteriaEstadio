<?php

function EstadoPuesto($fila,$puesto,$opcion,$listSillas){
    //Si la silla escogida esta libre se modifica el array con la opcion elegida.
    if($listSillas[$fila-1][$puesto-1]=="L"){
        $listSillas[$fila-1][$puesto-1]=$opcion;
    }
    /*Si la silla escogida esta vendida y el usuario vuelve a elegir el misma silla
     y la intenta volver a comprar,reservar o vender, se le mostrará una notificación*/
    else if($listSillas[$fila-1][$puesto-1]=="V"){
        switch ($opcion) {
            case "L":
            echo "<script>alert('El puesto elegido ya ha sido vendido');</script>";
                 break;
            case "R":
            echo "<script>alert('El puesto esta vendido, no se puede Reservar');</script>";
                break;
            case "V":
            echo "<script>alert('El puesto ya fue vendido');</script>";
                break;
        }
        
    }
    /*Si la silla elegida por el Usuario ya esta reservada y  la opción 
    es reservar se le muestra una notificación.  */
    else if($listSillas[$fila-1][$puesto-1]=="R" && $opcion=="R"){
        echo "<script>alert('El puesto ya esta reservado');</script>";
    }
    /*Si la silla esta reservada y la opción es diferente a R se modifica la 
    opción el array con la opción elegida*/
    else if($listSillas[$fila-1][$puesto-1]=="R" && $opcion!="R"){
        $listSillas[$fila-1][$puesto-1]=$opcion;
    }
    // Se devuelve el array modificado. 
    return $listSillas;
}
 


