<?php

    //Condiciones, Switch, Ciclos, 
  
    define('Constante', 23);
    $Variable = 23;

    if($Variable > 6){
        echo "La variable es mayor";
    }

    echo "<hr>";

    if(Constante > 55){
        echo "La constante es mayor";
    }else if($Variable == Constante){
        echo "La variable y la constante son iguales";
    }

    


    $option = $_POST['OpcionElegida'];

    switch ($option) {
        case 1:
            echo "Hola desde la opcion 1";
            break;
        case 2:
            echo "Hola desde la opcion 2";
            break;
        case 3:
            echo "Hola desde la opcion 3";
            break;
        default:
           echo "Opcion invalidad";
            break;
    }
