<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 8 - Loteria</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container"><br>
        <center><h1><i>Juego de la Loteria</i></h1></center><hr>
        <form action="Practica8.php" method="POST">
            <center><input type="submit" value="Dar Carta" name="carta" class="btn btn-primary" style="background-color: blueviolet; border-color: blueviolet ;"></center><br>
        <div class="row">
            <div class="col-6">
                <div class="row m-1">
                <h5><center>Carta #1</center></h5>
                <?php
                        //Pintar carta 1
                for($i=0; $i<16; $i++){
                    $numero = rand(1,54);
                    echo "<div class='col-3 p-0'><img src='fotos_loteria/". $numero.".jpeg' class='img-thumbnail'></div>";
                }
                ?>                
                </div>
            </div>
            <div class="col-6">
                <div class="row m-1">
            <h5><center>Carta #2</center></h5>
                <?php
                        //Pintar carta 1
                for($i=0; $i<16; $i++){
                    $numero = rand(1,54);
                    echo "<div class='col-3 p-0'><img src='fotos_loteria/". $numero.".jpeg' class='img-thumbnail'></div>";
                }
                ?> 
                </div>
            </div>
        </div>        
    </form>
    </div>
</body>
</html>