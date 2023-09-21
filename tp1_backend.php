<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP1</title>
</head>
<body>
    <h1>Hola Mundo</h1>
    <?php
    $saludo = "Hola Mundo";
    echo $saludo;
    echo "<br>";
    $tierra = 800;
    $planta = 2500;
    echo $tierra + $planta;
    echo "<br>";
    echo $tierra - $planta;
    echo "<br>";
    echo $tierra * $planta;
    echo "<br>";
    echo $tierra / $planta;
    echo "<br>";
    echo $tierra % $planta;
    echo "<br>";
    $GradosCelsius = 20;
    $GradosFahrenheit = ($GradosCelsius*9/5)+32;
    echo $GradosFahrenheit;
    echo "<br>";
    $BaseRectangulo = 18;
    $AlturaRectangulo = 12;
    $AreaRectangulo = $BaseRectangulo*$AlturaRectangulo;
    $PerimetroRectangulo = $BaseRectangulo*2 + $AlturaRectangulo*2;
    echo $PerimetroRectangulo;
    echo "<br>";
    echo $AreaRectangulo;
    echo "<br>";
    $RadioCirculo = 30;
    $Pi = 3.14;
    $DiametroCirculo = $RadioCirculo*2;
    $PerimetroCirculo = $Pi*$DiametroCirculo;
    $AreaCirculo = $Pi*($RadioCirculo*$RadioCirculo);
    echo $PerimetroCirculo;
    echo "<br>";
    echo $AreaCirculo;
    ?>
</body>
</html>