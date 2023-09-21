<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2</title>
</head>
<body>
    <?php
    $Agua = 7;
    if ($Agua>0);
    echo "Es un numero positivo";
    echo "<br>";
    $Tierra = 5;
    if ($Tierra>1 & $Tierra<10);
    echo "Es un numero mayor que 1 y menor que 10";
    echo "<br>";
    $Fuego = 15;
    if ($Fuego>10 || $Fuego<2);
    echo "Cumple la condicion: Es un numero mayor a 10 o menor a 2";
    echo "<br>";
    $Numero1 = 6;
    $Numero2 = 9;
    if ($Numero1>$Numero2) {
    echo $Numero1+$Numero2;
    echo "<br>";
    echo $Numero1-$Numero2;
    } elseif ($Numero1<$Numero2) {
    echo $Numero1*$Numero2;
    echo "<br>";
    echo $Numero1/$Numero2;
    echo "<br>";
    echo $Numero1%$Numero2;
    } else {
        echo "Ambos numeros son iguales";
    }
    ?>
</body>
</html>