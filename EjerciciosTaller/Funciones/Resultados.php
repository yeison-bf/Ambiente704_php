<?php

    $opcion = $_POST['opcionMenu'];
   

   switch ($opcion) {
       case 1:
            CalcularPagoCamisas();
           break;
        case 2:
            ImpirmirNombreComprador("Elisabeth Velasquez");
           break;
       default:
           echo "Opcion invalidad";
           break;
   }


    function CalcularPagoCamisas(){
        $CantidadCamisas = $_POST['CantidadCamisas'];
        $CompraTotal = $_POST['CompraTotal'];

        if($CantidadCamisas >= 3){
            $Descuento = ($CompraTotal * 20) /100;
            $PagoNeto = $CompraTotal - $Descuento;
        }else if($CantidadCamisas < 3){
            $PagoNeto = $CompraTotal;
            $Descuento = 0;
        };
        
        ImprimirCalculos($CantidadCamisas, $CompraTotal, $Descuento, $PagoNeto);
    }

    function ImprimirCalculos($CantidadCamisas, $CompraTotal, $Descuento, $PagoNeto){
        echo "Detalle Compra <br>";
        echo "Total camisas compradas $CantidadCamisas <br>";
        echo "Total Pago de la Compra : $CompraTotal <br>";
        echo "Descuento : $Descuento <br>";
        echo "Pago Neto: $PagoNeto <br>";
    }

    
    function ImpirmirNombreComprador($nombreAprendiz){
        echo $nombreAprendiz;
    }