<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 7</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .casilla{
            height: 50px;
            font-weight: bold;
        }
        .escalera{
            background-image: url('Escalerilla.png')/*('naveespacial.png')*/;
            background-size: 70px;
            background-repeat: no-repeat;
            background-position: center;
        }
        .serpiente{
            background-image: url('serpienta.png')/*('marciane.jpg')*/;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .ficha{
            background-image: url('fichita.png');
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <center><h1><i><b><br>Tablero de Serpientes y Escaleras</b></i></h1></center><br>
            <form action="Practica7.php" method="POST"> 
                <center><input type="submit" value="Jugar" class="btn btn-primary" style="background-color: blueviolet; border-color: blueviolet ;"></center><hr>
                <div class="row" >
                <?php    
                $colores = ["#FF8FFA", "#8FCAFF", "#FFD38F", "#95E5E5", "#B395E5", "#FCC5FF ", "#9FF38A"];

                if(isset($_POST["casilla"])){
                    $dado = rand(1,12);
                    echo "<h2> Resultados del dado: ".$dado."</h2>";
                    $casilla = $dado + intval($_POST["casilla"]);
                    echo "<h3> El jugador estaba en la casilla ". intval($_POST["casilla"])." y pasó por la casilla ". $casilla."</h3>";
                    //Validación si ganó el jugador
                    if($casilla >= 100){
                        echo "<h1> El jugador ganó </h1>";
                        $casilla = 100;
                    }
                    //valida la escalera de la casilla de escalera 4
                    if($casilla == 4) {
                        $casilla = 15;
                        echo "<h3> El jugador cayó en una <img src= 'Escalerilla.png' width='50px' > y subió a la casilla 15 </h3>";
                    }
                    //valida la escalera de la casilla de escalera 28
                    if($casilla == 28) {
                        $casilla = 39;
                        echo "<h3> El jugador cayó en una <img src= 'Escalerilla.png' width='50px' > y subió a la casilla 39 </h3>";
                    }
                    //valida la escalera de la casilla de escalera 31                    
                    if($casilla == 31) {
                        $casilla = 42;
                        echo "<h3> El jugador cayó en una <img src= 'Escalerilla.png' width='50px' > y subió a la casilla 42 </h3>";
                    }
                    //valida la escalera de la casilla de escalera 45
                    if($casilla == 45) {
                        $casilla = 56;
                        echo "<h3> El jugador cayó en una <img src= 'Escalerilla.png' width='50px' > y subió a la casilla 56 </h3>";
                    }
                    //valida la escalera de la casilla de escalera 46
                    if($casilla == 46) {
                        $casilla = 57;
                        echo "<h3> El jugador cayó en una <img src= 'Escalerilla.png' width='50px' > y subió a la casilla 57 </h3>";
                    }
                    //valida la escalera de la casilla de escalera 65
                    if($casilla == 65) {
                        $casilla = 76;
                        echo "<h3> El jugador cayó en una <img src= 'Escalerilla.png' width='50px' > y subió a la casilla 76 </h3>";
                    }
                    //valida la escalera de la casilla de escalera 72
                    if($casilla == 72) {
                        $casilla = 83;
                        echo "<h3> El jugador cayó en una <img src= 'Escalerilla.png' width='50px' > y subió a la casilla 83 </h3>";
                    }
                    //valida la escalera de la casilla de escalera 89
                    if($casilla == 89) {
                        $casilla = 100;
                        echo "<h3> El jugador cayó en una <img src= 'Escalerilla.png' width='50px' > y subió a la casilla 100 </h3>";
                    }                    
                    //valida la escalera de la casilla de serpiente 16
                    if($casilla == 16) {
                        $casilla = 5;
                        echo "<h3> El jugador cayó en una <img src= 'serpienta.png' width='50px' > y bajó a la casilla 5 </h3>";
                    }                    
                    //valida la escalera de la casilla de serpiente 33
                    if($casilla == 33) {
                        $casilla = 22;
                        echo "<h3> El jugador cayó en una <img src= 'serpienta.png' width='50px' > y bajó a la casilla 22 </h3>";
                    }                    
                    //valida la escalera de la casilla de serpiente 48
                    if($casilla == 48) {
                        $casilla = 37;
                        echo "<h3> El jugador cayó en una <img src= 'serpienta.png' width='50px' > y bajó a la casilla 37 </h3>";
                    }                    
                    //valida la escalera de la casilla de serpiente 52
                    if($casilla == 52) {
                        $casilla = 41;
                        echo "<h3> El jugador cayó en una <img src= 'serpienta.png' width='50px' > y bajó a la casilla 41 </h3>";
                    }                    
                    //valida la escalera de la casilla de serpiente 77
                    if($casilla == 77) {
                        $casilla = 66;
                        echo "<h3> El jugador cayó en una <img src= 'serpienta.png' width='50px' > y bajó a la casilla 66 </h3>";
                    }                    
                    //valida la escalera de la casilla de serpiente 80
                    if($casilla == 80) {
                        $casilla = 69;
                        echo "<h3> El jugador cayó en una <img src= 'serpienta.png' width='50px' > y bajó a la casilla 69 </h3>";
                    }                    
                    //valida la escalera de la casilla de serpiente 86
                    if($casilla == 86) {
                        $casilla = 75;
                        echo "<h3> El jugador cayó en una <img src= 'serpienta.png' width='50px' > y bajó a la casilla 75 </h3>";
                    }                    
                    //valida la escalera de la casilla de serpiente 99
                    if($casilla == 99) {
                        $casilla = 88;
                        echo "<h3> El jugador cayó en una <img src= 'serpienta.png' width='50px' > y bajó a la casilla 88 </h3>";
                    }
                } else{
                    $casilla = 0;
                }
                for($i=100; $i>0; $i--){
                    if($casilla == $i){
                        echo "<div class='col-1 card m-1 casilla ficha' style='background-color:".$colores[rand(0,6)].";'>".$i."</div>";
                    }
                    else if($i == 65||$i == 4||$i == 28||$i == 89||$i == 31||$i == 72||$i == 46||$i == 45){
                        echo "<div class='col-1 card m-1 casilla escalera' style='background-color:".$colores[rand(0,6)].";'>".$i."</div>";
                    }else  if($i == 80||$i == 33||$i == 48||$i == 86||$i == 52||$i == 16||$i == 77||$i == 99){
                        echo "<div class='col-1 card m-1 casilla serpiente' style='background-color:".$colores[rand(0,6)].";'>".$i."</div>";
                    }
                    else {
                        echo "<div class='col-1 card m-1 casilla' style='background-color:".$colores[rand(0,6)].";'>".$i."</div>";
                    }
                }
                ?>
                </div>
                <input type="hidden" name="casilla" value="<?php echo $casilla; ?>">
            </form>
    </div>
</body>
</html>

