<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- 
En este ejercicio se tiene que escribir un programa que imite el funcionamiento
básico de un solitario de dados. Las reglas del juego son las siguientes:
• El usuario tiene que ir tirando dados de forma aleatoria hasta que le salgan los
seis valores del dado.
• Si consigue sacar todos lo dados en menos de 12 tiradas, el jugador gana y se
muestra junto al número de tiradas el siguiente icono (&#128077;)
• Si consigue sacar todos lo dados en 12 o más tiradas, el jugador pierde y se
muestra junto al número de tiradas el siguiente icono (&#128078;)
El resultado que se tiene que mostrar por pantalla es:
• El resultado de cada una de las tiradas del dado.
• El número de tiradas que ha tardado en conseguir sacar todos los dados y el icono
correspondiente en caso de haber ganado o perdido.
• N.º veces que salió cada uno de los dados en orden de mayor ocurrencia a menor -->

<body>
    <h1>Todos los dados</h1>
    <p>Si sacas todos los dados en menos de doce tiradas, habrás ganado, en caso contrario habrás perdido.</p>
    <?php

    function tirarDado()
    { //Funcion para tirar los dados
        return rand(1, 6);
    }

    $tiradas = 0;
    $resultado = array(); //Array que contiene el resultado final, es decir, el que te da o no la victoria
    $tiradacompleta = array(); //Array con todos los valores que has ido obteniendo de la tirada

    while (count($resultado) != 6) { //Mientras que el array resultado no tenga los 6 valores, vamos haciendo tiradas de dados, si en la tirada sale un valor que no contiene el array resultado, lo añadimos
        $tirada = tirarDado();
        $tiradas++; //contador para ver el numero de tiradas que llevamos
        $tiradacompleta[] = $tirada;
        if (!in_array($tirada, $resultado)) {
            $resultado[] = $tirada;
        }
    }

    if ($tiradas < 12) { //Si ha habido 12 o menos tiradas, ha ganado sino, ha perdido
        echo "<h2>Número de tiradas: $tiradas &#128077;</h2>";
    } else {
        echo "<h2>Número de tiradas: $tiradas &#128078;</h2>";
    }

    echo "Tu tirada ha sido de: ";
    ?>
    <!--Mostramos el array de las tiradas-->
    <pre><?php print_r($tiradacompleta); ?></pre>

    <?php
    echo "<br><br>";

    /* array_count_values(array $array): array
El array devuelto tiene como índices los valores del array original y como valores la cantidad
de veces que aparece el valor. */

    $ocurrencias_de_numeros = array_count_values($tiradacompleta);
    arsort($ocurrencias_de_numeros);
    //Mostramos el numero de ocurrencias de cada valor en el array
    foreach ($ocurrencias_de_numeros as $ocurrencias => $numeros) {
        echo "El numero $ocurrencias ha aparecido $numeros veces <br>";
    }

    ?>
</body>

</html>