<?php

if($_POST) {

    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    // Suma
    $suma=$valorA+$valorB;

    // Resta
    $resta=$valorA-$valorB;

    // Multiplicación
    $multiplicacion=$valorA*$valorB;

    // División
    $division=$valorA/$valorB;

    echo "<br/>".$suma;
    echo "<br/>".$resta;
    echo "<br/>".$multiplicacion;
    echo "<br/>".$division; 


    if($valorA==$valorB) {
        echo "El valor de A es igual al valor de B <br/>";


        if($valorA==4) {
            echo "El valor de A es igual a 4";
        }

        if($valorA==5) {
            echo "El valor de A es igual a 5";
        }
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmetricos</title>
</head>
<body>


    <form action="ejercicio11.php" method="post">
    Valor A:
    <input type="text" name="valorA" id="">
    <br/>
    Valor B:
    <input type="text" name="valorB" id="">
    <br/>
    <input type="submit" value="Calcular">
    </form>


</body>
</html>