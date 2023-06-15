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
            background-image: url('Escalerilla.png');
            background-size: cover;
        }
        .serpiente{
            background-image: url('serpienta.png');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    <?php
    $colores = ["#FF8FFA", "#8FCAFF", "#FFD38F", "#95E5E5", "#B395E5", "#FCC5FF ", "#9FF38A"];

    ?>
    <div class="container">
        <center><h1><i><b><br>Tablero de Serpientes y Escaleras</b></i></h1></center><br>
            <form action="">
                <div class="row">
                <?php
                    for($i=110; $i>0; $i--){
                        if($i == 65||$i == 4||$i == 28||$i == 95||$i == 33||$i == 72||$i == 100||$i == 45){
                        echo "<div class='col-1 card m-1 casilla escalera' style='background-color:".$colores[rand(0,6)].";'>".$i."</div>";

                        }else  if($i == 80||$i == 10||$i == 48||$i == 86||$i == 52||$i == 2||$i == 107||$i == 99){
                        echo "<div class='col-1 card m-1 casilla serpiente' style='background-color:".$colores[rand(0,6)].";'>".$i."</div>";
                        }
                        else{
                        echo "<div class='col-1 card m-1 casilla' style='background-color:".$colores[rand(0,6)].";'>".$i."</div>";
                        }
                    }
                ?>
            </form>
        </div>
    </div>
</body>
</html>

