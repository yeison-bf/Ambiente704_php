<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="rwaper">
            <form action="ciclos.php" method="post">
                <label for="">Cantidad designada
                    <input name="inputCantidad" type="text" class="input-form">
                </label> <br>
                <input type="submit" value="Imprimir">
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
</html>

<?php
    
    $cantidad =  $_POST['inputCantidad'];
    echo "<hr> Impresión del for()";

    //for()
    for ($i=0; $i <= $cantidad; $i++) { 
        if($i % 2 == 0){
            echo " Este numero ".$i." es par<br>";
        }else{ 
            echo " Este numero ".$i." es impar<br>";
        }
    }

    echo "<hr> Impresión del While()";
    
    $i = 0;
//while()
    while($i <= $cantidad){
        if($i % 2 == 0){
            echo " Este numero ".$i." es par<br>";
        }

        $i++;
    }
//foreach => array