<?php

/*
    Arraya
    Arreglos Asociativos
*/

$NombreArrego  = Array(
    "Nombre" => "Sandra Isabel",
    "Apellidos" => "Herazo Castro",
    "Edad" => 23,
    "Cargo" => "Aprendiz"
);

var_dump($NombreArrego);
echo "<hr>";

foreach ($NombreArrego as $value) {
    echo $value."<br>";
}

echo "<br>";
echo "<br>";
echo "<hr>";
echo "<h1>Arreglos asociativos</h1>";


$NombreArregoPrincipal  = Array(
    $NombreArrego  = Array(
        "Nombre" => "Kamila",
        "Apellidos" => "Londoño",
        "Edad" => 23,
        "Cargo" => "Aprendiz"
    ),
    $NombreArrego  = Array(
        "Nombre" => "Heidy",
        "Apellidos" => "Florez",
        "Edad" => 23,
        "Cargo" => "Aprendiz"
    ),
    $NombreArrego  = Array(
        "Nombre" => "Elisabeth",
        "Apellidos" => "Velasquez",
        "Edad" => 23,
        "Cargo" => "Aprendiz"
    )
);


//var_dump($NombreArregoPrincipal);

foreach ($NombreArregoPrincipal as $i => $value) {
    echo (" 
        <table border='1'>
            <tbody>
                <tr>
                    <td>".$NombreArregoPrincipal[$i]["Nombre"]."</td>
                    <td>".$NombreArregoPrincipal[$i]["Apellidos"]."</td>
                    <td>".$NombreArregoPrincipal[$i]["Edad"]."</td>
                    <td>".$NombreArregoPrincipal[$i]["Cargo"]."</td>
                </tr>
            </tbody>
        </table>
    ");
}