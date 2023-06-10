<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego del Ahorcado</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body style="background-color: #c6abf1">

    <?php
    $nombre = $_POST["jugador"];
    $palabra = $_POST["palabra"];
    $vidas = $_POST["vidas"];
    $frase = $_POST["frase"];
    $b = false;

    if(isset($_POST["frase"])){
        $letra=$_POST["letra"];
        for($i=0 ; $i<count(str_split($palabra));$i++){
            if($palabra[$i] == $letra){
                $frase[$i] = $letra;
                $b = true;
            }
        }
        if(!$b){
            echo "<h4>La letra ".$letra." no existe</h4>";
            $vidas--;
        }
        if($vidas <= 0){
            echo "<h1>Juego terminado se agotaron las vidas!</h1>";
            echo "<a href='Practica6.html'>Regresar al inicio</a>";
            return;
        }
        $terminado = false;
        for($j=0 ; $j<count(str_split($palabra)); $j++){
            if(!$frase[$j]){
                $terminado = true;
            }
        }
        if($terminado == false){
            echo "<center><br><h1>Felicidades, ganaste!</h1></center>";
            echo "<center><a href='Practica6.html'><button class='btn btn-primary' style='background-color: blueviolet; border-color: blueviolet;'>Regresar al inicio</button></a></center>";
            return;
        }
    }
?>
<div class="container">
    <form action="Practica6.php" method="POST">
        <input type="hidden" value="<?php echo $nombre ?>" name="jugador">
        <input type="hidden" value="<?php echo $palabra ?>" name="palabra">
        <input type="hidden" value="<?php echo $vidas ?>" name="vidas">

        <div class="row">
            <center><i><br><h1>Juego del Ahorcado</h1></i></center><hr>
            <h3>Nombre del jugador: <?php echo $nombre; ?></h3>
            <h4>Número de vidas: <?php echo $vidas; ?></h4>
            <?php
                $letras = str_split($palabra); //[0]='H', [1]='O', [2]='L', [3]='A';
                for($i=0; $i<(count($letras)); $i++){
                    echo "<input type='text' name='frase[]' style='width: 5%; border-radius: 4px; border-color: #c6abf1;' value='".$frase[$i]."'>";
                }
            ?>
        </div>
        <div class="row mt-4">
            <div>
                <input type="text" name="letra" maxlength="1" required style=" width: %; height: 35px; border-radius: 4px; border-color: #c6abf1;">
                <input type="submit" value="Enviar letra" class="btn btn-primary" style="background-color: blueviolet; border-color: blueviolet;">
            </div>
        </div>
    </form>
</div>
</body>
</html>