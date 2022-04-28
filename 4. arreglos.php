<?php

    /*

            Arreglo:
                - Arreglo();
                - Arreglos asociativos();

    */

    $nombreArreglo = Array(
        1 => 10,
        "2" => 20,
        '3' => 30,
        4 => 40,
        "5" => 50,
        6 => 60,
    );

    $nombreArregloUsuarios = Array(
        "Nombre"    => "Elisabeth",
        "Apellidos" => "Velasquez",
        "Edad"      => "20",
        "Direccion" => "Medellin",
        "Rol"       => "Aprendiz",
    );

    var_dump($nombreArregloUsuarios);
    echo "<br>";
    echo "<br>";

    foreach ($nombreArregloUsuarios as $value) {
        echo $value."<br>";
    }

    echo "<br>";
    echo "<h1>Arreglos asociativos</h1>";

    $nombreArregloUsuariosAgrupados = Array(
        $Aprendiz = Array(
            "Nombre"    => "Elisabeth",
            "Apellidos" => "Velasquez",
            "Edad"      => "20",
            "Direccion" => "Medellin",
            "Rol"       => "Aprendiz",
        ),
        $Aprendiz = Array(
            "Nombre"    => "Ingrid",
            "Apellidos" => "Loaiza",
            "Edad"      => "28",
            "Direccion" => "Medellin",
            "Rol"       => "Aprendiz",
        ), 
        $Aprendiz = Array(
            "Nombre"    => "Maria Camila",
            "Apellidos" => "Londoño",
            "Edad"      => "18",
            "Direccion" => "Medellin",
            "Rol"       => "Aprendiz",
        ), 
        $Aprendiz = Array(
            "Nombre"    => "Daniel",
            "Apellidos" => "Garcia",
            "Edad"      => "20",
            "Direccion" => "Medellin",
            "Rol"       => "Monitor",
        )
    );
  
    var_dump($nombreArregloUsuariosAgrupados);
    echo "<br>";
    echo "<br>";


    foreach ($nombreArregloUsuariosAgrupados as $key => $value) {
            echo " <table border='1'>
                        <tr>
                            <td width='100px'>".$nombreArregloUsuariosAgrupados[$key]['Nombre']."</td> 
                            <td width='100px'>".$nombreArregloUsuariosAgrupados[$key]['Apellidos']."</td> 
                            <td width='100px'>".$nombreArregloUsuariosAgrupados[$key]['Edad']."</td> 
                            <td width='100px'>".$nombreArregloUsuariosAgrupados[$key]['Direccion']."</td> 
                            <td width='100px'>".$nombreArregloUsuariosAgrupados[$key]['Rol']."</td> 
                        </tr>
                    </table> ";
        };
    
