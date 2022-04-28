<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        echo $_POST['nombres'];
        echo '<br>';
        echo $_POST['apellidos'];
    
        $array = array(
            "foo" => "Yeison",
            "bar" => "Barrios",
        );
    ?>

    <form action="inicio.php" method="post">
        <input name="nombres" type="text" class="input-form m-5"><br>
        <input name="apellidos" type="text" class="input-form m-5">
        <br>
        <input type="submit" value="Enviar">
    </form>

    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>codigo</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($array as $i => $value){
                    ?>
                        <tr>
                            <td><?php echo $array[$i]; ?></td>
                        </tr>
                    <?php
                };
            ?>

            <?php
                for ($i=0; $i < count($array) ; $i++) { 
                    echo $array[$i];
                }
            ?> <hr>

           
        </tbody>
    </table>

  
</body>
</html>