<?php
include_once 'Teatro.php';

// cargamos las 4 funciones sin funciones de array
$funciones[0]["nombre"] = "Hamlet";
$funciones[0]["precio"] = 1200;

$funciones[1]["nombre"] = "El Rey Leon";
$funciones[1]["precio"] = 1500;

$funciones[2]["nombre"] = "La Sirenita";
$funciones[2]["precio"] = 1300;

$funciones[3]["nombre"] = "Shrek";
$funciones[3]["precio"] = 1100;

$teatro = new Teatro("Teatro Neuquén", "Av. Argentina 123", $funciones);

do {
    echo "\n------ MENU TEATRO ------\n";
    echo "1. Ver info del teatro\n";
    echo "2. Cambiar nombre del teatro\n";
    echo "3. Cambiar direccion del teatro\n";
    echo "4. Cambiar nombre de una funcion\n";
    echo "5. Cambiar precio de una funcion\n";
    echo "6. Salir\n";
    echo "Elegí una opcion: ";
    $opcion = trim(fgets(STDIN));

    switch ($opcion) {
        case 1:
            echo "\n" . $teatro . "\n";
            break;

        case 2:
            echo "Nuevo nombre del teatro: ";
            $nuevoNombre = trim(fgets(STDIN));
            $teatro->setNombre($nuevoNombre);
            break;

        case 3:
            echo "Nueva direccion del teatro: ";
            $nuevaDireccion = trim(fgets(STDIN));
            $teatro->setDireccion($nuevaDireccion);
            break;

        case 4:
            echo "Numero de funcion (1 a 4): ";
            $indice = trim(fgets(STDIN)) - 1;
            if ($indice >= 0 && $indice < 4) {
                echo "Nuevo nombre de la funcion: ";
                $nuevoNombreFuncion = trim(fgets(STDIN));
                $teatro->cambiarNombreFuncion($indice, $nuevoNombreFuncion);
            } else {
                echo "Numero de funcion invalido\n";
            }
            break;

        case 5:
            echo "Numero de funcion (1 a 4): ";
            $indice = trim(fgets(STDIN)) - 1;
            if ($indice >= 0 && $indice < 4) {
                echo "Nuevo precio de la funcion: ";
                $nuevoPrecio = trim(fgets(STDIN));
                $teatro->cambiarPrecioFuncion($indice, $nuevoPrecio);
            } else {
                echo "Numero de funcion invalido\n";
            }
            break;

        case 6:
            echo "";
            break;

        default:
            echo "Opcion invalida\n";
    }

} while ($opcion != 6);

