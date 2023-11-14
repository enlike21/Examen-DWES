<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-size: xx-large;
        }
    </style>
</head>
<!-- En este ejercicio se tiene que escribir un programa que muestre tres secuencias
aleatorias de 10 bits y una cuarta secuencia que indique cuál es el bit más común en
esa posición.
Muestre también el número total de bits a 1 que hay entre todas las secuencias
incluida la última -->

<body>

    <h1>El bit más común</h1>

    <p>Actualice la página para mostrar tres secuencias aleatorias de bits y una cuarta secuencia que indica cuál es el bit más común en esa posición</p>

    <?php

    //Arrays con los que voy a trabajar
    $secuenciaA = array(random_int(0, 1), random_int(0, 1), random_int(0, 1), random_int(0, 1), random_int(0, 1), random_int(0, 1), random_int(0, 1), random_int(0, 1), random_int(0, 1), random_int(0, 1),);
    $secuenciaB = array(random_int(0, 1), random_int(0, 1), random_int(0, 1), random_int(0, 1), random_int(0, 1), random_int(0, 1), random_int(0, 1), random_int(0, 1), random_int(0, 1), random_int(0, 1),);
    $secuenciaC = array(random_int(0, 1), random_int(0, 1), random_int(0, 1), random_int(0, 1), random_int(0, 1), random_int(0, 1), random_int(0, 1), random_int(0, 1), random_int(0, 1), random_int(0, 1),);

    $secuenciacomparativa = array(); //Array comparativo


    //Contadores
    $contadoresde0 = 0;
    $contadoresde1 = 0;
    $contadorTOTALde1 = 0;


    //Muestro los Arrays
    echo "<b>A: </b>";
    foreach ($secuenciaA as $bits) {
        echo "<b>$bits</b>";
        if ($bits == 1) {
            $contadorTOTALde1++;
        }
    }

    echo "<br><br>";
    echo "<b>B: </b>";
    foreach ($secuenciaB as $bits) {
        echo "<b>$bits</b>";
        if ($bits == 1) {
            $contadorTOTALde1++;
        }
    }

    echo "<br><br>";
    echo "<b>C: </b>";
    foreach ($secuenciaC as $bits) {
        echo "<b>$bits</b>";
        if ($bits == 1) {
            $contadorTOTALde1++;
        }
    }

    //Función para comprobar, si el valor de cada posicion del array posee un 0 o un 1, dependiendo de cual posea, añado un punto al contador, si el contador sale que tiene mas 0 que 1, añado el valor 0 a la posición i del array comparativo
    for ($i = 0; $i < 10; $i++) {
        if ($secuenciaA[$i] == 0) {
            $contadoresde0++;
        } else {
            $contadoresde1++;
        }
        if ($secuenciaB[$i] == 0) {
            $contadoresde0++;
        } else {
            $contadoresde1++;
        }
        if ($secuenciaC[$i] == 0) {
            $contadoresde0++;
        } else {
            $contadoresde1++;
        }
        if ($contadoresde0 > $contadoresde1) {
            $secuenciacomparativa[$i] = 0;
        } else {
            $secuenciacomparativa[$i] = 1;
        }
        //Reseteo los contadores
        $contadoresde0 = 0;
        $contadoresde1 = 0;
    }


    //Muestro el array comparativo
    echo "<br><br>";
    echo "<hr>";
    echo "<b>R: </b>";
    foreach ($secuenciacomparativa as $bits) {
        echo "<b>$bits</b>";
        if ($bits == 1) {
            $contadorTOTALde1++;
        }
    }

    //Mientras mostraba los arrays, he creado un contador total de valores 1 que posee cada array, luego muestro el total de 1.
    echo "<p>El numero total de 1 ha sido $contadorTOTALde1</p>";

    ?>

</body>

</html>