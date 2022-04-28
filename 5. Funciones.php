<?php

    switch ($_POST['opcion']) {
        case 1:
            conParametros($_POST['nombre']);
            break;
        case 2:
            ImprimirAprendiz($_POST['cargo']);
            break;
        default:
            echo "Opcion invalidad";
            break;
    }


  
    function conParametros($nombre){
        echo "Nombre aprendiz: $nombre <br>";
    }


    function ImprimirAprendiz($cargo){
        echo "Nombre aprendiz: $nombre <br>";
    }


    

