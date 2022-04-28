<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>

<body>
    <!-- 9.	Hacer un algoritmo que calcule el total a pagar por la compra de camisas. Si se compran tres camisas o más se aplica un descuento del 20% sobre el total de la compra y si son menos de tres camisas un descuento del 10% -->

    <div class="container-fluid">
        <div class="wraper p-5">
            <div class="card">
                <div class="card-header">
                    Ingrid SAS
                </div>
                <form class="" action="Funciones/Resultados.php" method="POST">
                    <div class="card-body col-12">
                        <label class=" col-12 label-groud" for="">Numero de camisas a comprar
                            <br><input name="CantidadCamisas" class="input-groud col-12" type="number">
                        </label>
                        <label class=" col-12 label-groud" for="">Total Compra
                            <br><input name="CompraTotal" class="input-groud col-12" type="number">
                        </label>
                    </div>

                    <input value="1" name="opcionMenu" type="hidden">


                    <div class="card-footer">
                        <input class="btn btn-primary btn-sm col-6" type="submit" value="Enviar">
                    </div>
                </form>

            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>