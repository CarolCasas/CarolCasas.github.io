<?php

    $nombre = $_POST["nombre"];
    $calificacion =0;

    $pregunta1 = $_POST["pregunta1"];
    /*$pregunta3 = $_POST["pregunta3"];
    $pregunta4 = $_POST["pregunta4"];
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