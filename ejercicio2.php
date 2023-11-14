<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!-- En este ejercicio se tiene que crear un programa que muestre una partida de
solitario "Cuenta cartas". Las reglas del juego son las siguientes:
• Se muestran entre cinco y diez cartas de corazones no repetidas, con valores al
azar entre 1 y 10.
• Encima de las cartas se muestran los valores desde 1 hasta el número de cartas
que haya, (entre 5 y 10).
• Si coincide algún número con el número de la carta correspondiente inferior, el
jugador pierde y se muestra el mensaje: "Lo siento has perdido".
• Si todas las cartas tienen valores distintos del número correspondiente superior,
el jugador gana y se muestra:"¡Enhorabuena has ganado!"
NOTA: Para imprimir la imagen de una carta se utiliza lo siguiente:
echo ‘<p><img src="nombrecarta.svg” width="50"></p>’; -->

<body>
    <h1>Cuenta cartas</h1>
    <p>Si ningún número de carta coincide con el número escrito encima de ella, habrás ganado, en caso contrario habrás perdido</p>
    <?php

    $numero_de_cartas = random_int(6, 10); //Creo el numero de cartas que se van a mostrar, creo 6 debido a que si pongo 5, me pueden aparecer 4 cartas, con el valor 6, como mínimo aparecen 5
    $j = random_int(1, $numero_de_cartas); //Random int para mostrar dicha carta al jugador y además contener su valor
    $resultado = true; //Booleano para comprobar si el resultado de la partida es a favor o en contra
    $cartas_ya_existentes = array(); //Array para que no se repitan cartas

    for ($i = 1; $i < $numero_de_cartas; $i++) { //Bucle que recorre el numero de cartas que tiene el jugador
        while (in_array($j, $cartas_ya_existentes)) { //Bucle que comprueba si la carta que le ha salido, ya ha salido con anterioridad o no, yisi ya había salido, la cambia
            $j = random_int(1, $numero_de_cartas);
        }
        echo "$i"; //Imprimo el índice y la carta asociada.
        echo "<p><img src= cartas/c$j.svg width=50></p>";
        if ($i == $j) { //Compruebo si el numero del indice y el valor de la carta es el mismo y si es el mismo, cambio el booleano a false para que me diga que he perdido la partida posteriormente
            $resultado = false;
        }
        $cartas_ya_existentes[$i] = $j; //Añado el valor de la carta a la lista de cartas ya utilizadas para que no se repita
        $j = random_int(1, $numero_de_cartas);
    }


    //Muestro el resultado
    if ($resultado) {
        echo "<b>Enhorabuena has ganado</b>";
    } else {
        echo "<b>Lo siento has perdido</b>";
    }

    ?>

</body>

</html>