<?php

    $nombre = $_POST["nombre"];
    $calificacion =0;

    $pregunta1 = $_POST["pregunta1"];
    $pregunta2 = $_POST["pregunta2"];
    $pregunta3 = $_POST["pregunta3"];
    /*$pregunta4 = $_POST["pregunta4"];
    $pregunta5 = $_POST["pregunta5"];
    $pregunta6 = $_POST["pregunta6"];
    $pregunta7 = $_POST["pregunta7"];
    $pregunta8 = $_POST["pregunta8"];
    $pregunta9 = $_POST["pregunta9"];
    $pregunta10 = $_POST["pregunta10"];*/

    echo "<h3>Pregunta 1, respuesta seleccionada: (".$pregunta1.")</h3>";
    if($pregunta1 == "a"){
        $calificacion ++;
        echo "<img src='correcto.png' width= '3%'><hr>";
    }else{
        echo "<p> Respuesta es (a) </p>";
        echo "<img src='incorrecto.png' width= '3%'><hr>";
    }

    echo "<h3>Pregunta 2, respuesta seleccionada: (".$pregunta2.")</h3>";
    if($pregunta2 == "a"){
        $calificacion ++;
        echo "<img src='correcto.png' width= '3%'><hr>";
    }else{
        echo "<p> Respuesta es (a) </p>";
        echo "<img src='incorrecto.png' width= '3%'><hr>";
    }

    echo "<h3>Pregunta 3, respuesta seleccionada: (".$pregunta3.")</h3>";
    if($pregunta3 == "b"){
        $calificacion ++;
        echo "<img src='correcto.png' width= '3%'><hr>";
    }else{
        echo "<p> Respuesta es (a) </p>";
        echo "<img src='incorrecto.png' width= '3%'><hr>";
    }

    echo "<h3>Pregunta 4, respuesta seleccionada: (".$pregunta4.")</h3>";
    if($pregunta4 == "b"){
        $calificacion ++;
        echo "<img src='correcto.png' width= '3%'><hr>";
    }else{
        echo "<p> Respuesta es (a) </p>";
        echo "<img src='incorrecto.png' width= '3%'><hr>";
    }

    echo "<h3>Pregunta 5, respuesta seleccionada: (".$pregunta5.")</h3>";
    if($pregunta5 == "c"){
        $calificacion ++;
        echo "<img src='correcto.png' width= '3%'><hr>";
    }else{
        echo "<p> Respuesta es (a) </p>";
        echo "<img src='incorrecto.png' width= '3%'><hr>";
    }

    echo "<h3>Pregunta 6, respuesta seleccionada: (".$pregunta6.")</h3>";
    if($pregunta6 == "b"){
        $calificacion ++;
        echo "<img src='correcto.png' width= '3%'><hr>";
    }else{
        echo "<p> Respuesta es (a) </p>";
        echo "<img src='incorrecto.png' width= '3%'><hr>";
    }

    echo "<h3>Pregunta 7, respuesta seleccionada: (".$pregunta7.")</h3>";
    if($pregunta7 == "c"){
        $calificacion ++;
        echo "<img src='correcto.png' width= '3%'><hr>";
    }else{
        echo "<p> Respuesta es (a) </p>";
        echo "<img src='incorrecto.png' width= '3%'><hr>";
    }

    echo "<h3>Pregunta 8, respuesta seleccionada: (".$pregunta8.")</h3>";
    if($pregunta8 == "c"){
        $calificacion ++;
        echo "<img src='correcto.png' width= '3%'><hr>";
    }else{
        echo "<p> Respuesta es (a) </p>";
        echo "<img src='incorrecto.png' width= '3%'><hr>";
    }

    echo "<h3>Pregunta 9, respuesta seleccionada: (".$pregunta9.")</h3>";
    if($pregunta9 == "b"){
        $calificacion ++;
        echo "<img src='correcto.png' width= '3%'><hr>";
    }else{
        echo "<p> Respuesta es (a) </p>";
        echo "<img src='incorrecto.png' width= '3%'><hr>";
    }

    echo "<h3>Pregunta 10, respuesta seleccionada: (".$pregunta10.")</h3>";
    if($pregunta10 == "a"){
        $calificacion ++;
        echo "<img src='correcto.png' width= '3%'><hr>";
    }else{
        echo "<p> Respuesta es (a) </p>";
        echo "<img src='incorrecto.png' width= '3%'><hr>";
    }
    
    if($calificacion >= 0 && $calificacion <=5){
        echo "<h3> Calificación: ".$calificacion.", No aprovado (Informate bebé)</h3>";
        echo "<img src='Malilla.png' width'10%'<hr>";
    }else if($calificacion >=6 && $calificacion <=8){
        echo "<h3> Calificación:".$calificacion.", Ahí la llevas (Tu puedes chikite)</h3>";
        echo "<img src='pensando.png' width'10%'<hr>";
    }else if($calificacion >=9 && $calificacion <=10){
        echo "<h3> Calificación:".$calificacion.", Me impresionas (Que orgullo)</h3>";
        echo "<img src='emocionade.png' width'10%'<hr>";
    }

    

?>