<?php
    $nombre = $_GET ["nombre"];
    echo "Nombre: " .$nombre . "<br><br>";

    $edad = $_GET ["edad"];
    echo "Edad: " .$edad . "<br><br>";

    $escuela = $_GET ["escuela"];
    echo "Escuela: " .$escuela . "<br><br>";
    
    $fecha_ingreso = $_GET ["fecha_ingreso"];
    echo "Fecha_ingreso: " .$fecha_ingreso . "<br><br>";
    
    $direccion = $_GET ["direccion"];
    echo "Direccion: " .$direccion . "<br><br>";


    if($edad >= 18){
        echo "Es MAYOR de edad" . "<br><br>";
    }else{
        echo "Es MAYOR de edad" . "<br><br>";
    }

    if($escuela == "CETis 107"){
        echo "<div style= 'background-color:blue;> CETis 107 </div>";
    }else if($escuela == "CBTIS 224"){
        echo "<div style= 'background-color:red;> CBTIS 224 </div>";
    }else if($escuela == "COBAES 27"){
        echo "<div style= 'background-color:green;> COBAES 27 </div>";
    }

?>