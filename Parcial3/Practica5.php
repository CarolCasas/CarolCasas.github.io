<?php

    $cuadros = $_POST["cuadro"];

    for($i=0; $i<count($cuadros); $i++){
        if($cuadros[$i]!="X" && $cuadros[$i] !="O"){
            echo "<h2>Solo se permite X y/o O</h2>";
            return;
        }
    }
/*
    [0][1][2]
    [ ][ ][ ]
    [ ][ ][ ]
*/

    if($cuadros[0] == "X" && $cuadros[1] == "X" && $cuadros[2] == "X"){
        echo "<h1> GANADOR [X]</h1>";
        echo "[0][1][2]<br>
              [ ][ ][ ]<br>
              [ ][ ][ ]";
        return;
    }else if($cuadros[0] == "O" && $cuadros[1] == "O" && $cuadros[2] == "O"){
        echo "<h1> GANADOR [O]</h1>";
        echo"[0][1][2]<br>
             [ ][ ][ ]<br>
             [ ][ ][ ]";
    return;
    }
/*
    [ ][ ][ ]
    [3][4][5]
    [ ][ ][ ]

*/
    if($cuadros[3] == "X" && $cuadros[4] == "X" && $cuadros[5] == "X"){
        echo "<h1> GANADOR [X]</h1>";
        echo"[ ][ ][ ]<br>
             [4][5][6]<br>
             [ ][ ][ ]";
        return;
    }else if($cuadros[3] == "O" && $cuadros[4] == "O" && $cuadros[5] == "O"){
        echo "<h1> GANADOR [O]</h1>";
        echo"[ ][ ][ ]<br>
             [4][5][6]<br>
             [ ][ ][ ]";
        return;
    }
/*
    [ ][ ][ ]
    [ ][ ][ ]
    [6][7][8]
*/

    if($cuadros[6] == "X" && $cuadros[7] == "X" && $cuadros[8] == "X"){
        echo "<h1> GANADOR [X]</h1>";
        echo"[ ][ ][ ]<br>
             [ ][ ][ ]<br>
             [6][7][8]";
        return;
    }else if($cuadros[6] == "O" && $cuadros[7] == "O" && $cuadros[8] == "O"){
        echo "<h1> GANADOR [O]</h1>";
        echo"[ ][ ][ ]<br>
             [ ][ ][ ]<br>
             [6][7][8]";
        return;
    }

/*
    [ ][ ][2]
    [ ][ ][5]
    [ ][ ][8]
*/

if($cuadros[2] == "X" && $cuadros[5] == "X" && $cuadros[8] == "X"){
    echo "<h1> GANADOR [X]</h1>";
    echo"[ ][ ][2]<br>
         [ ][ ][5]<br>
         [ ][ ][8]";
    return;
}else if($cuadros[2] == "O" && $cuadros[5] == "O" && $cuadros[8] == "O"){
    echo "<h1> GANADOR [O]</h1>";
    echo"[ ][ ][2]<br>
         [ ][ ][5]<br>
         [ ][ ][8]";
    return;
}

/*
    [ ][1][ ]
    [ ][4][ ]
    [ ][7][ ]
*/

if($cuadros[1] == "X" && $cuadros[4] == "X" && $cuadros[7] == "X"){
    echo "<h1> GANADOR [X]</h1>";
    echo"[ ][1][ ]<br>
         [ ][4][ ]<br>
         [ ][7][ ]";
    return;
}else if($cuadros[1] == "O" && $cuadros[4] == "O" && $cuadros[7] == "O"){
    echo "<h1> GANADOR [O]</h1>";
    echo"[ ][1][ ]<br>
         [ ][4][ ]<br>
         [ ][7][ ]";
    return;
}
/*
    [0][ ][ ]
    [3][ ][ ]
    [6][ ][ ]
*/

if($cuadros[0] == "X" && $cuadros[3] == "X" && $cuadros[6] == "X"){
    echo "<h1> GANADOR [X]</h1>";
    echo"[0][ ][ ]<br>
         [3][ ][ ]<br>
         [6][ ][ ]";
    return;
}else if($cuadros[0] == "O" && $cuadros[3] == "O" && $cuadros[6] == "O"){
    echo "<h1> GANADOR [O]</h1>";
    echo"[0][ ][ ]<br>
         [3][ ][ ]<br>
         [6][ ][ ]";
    return;
}

/*
    [0][ ][ ]
    [ ][4][ ]
    [ ][ ][8]
*/

if($cuadros[0] == "X" && $cuadros[4] == "X" && $cuadros[8] == "X"){
    echo "<h1> GANADOR [X]</h1>";
    echo"[0][ ][ ]<br>
         [ ][4][ ]<br>
         [ ][ ][8]";
    return;
}else if($cuadros[0] == "O" && $cuadros[4] == "O" && $cuadros[8] == "O"){
    echo "<h1> GANADOR [O]</h1>";
    echo"[0][ ][ ]<br>
         [ ][4][ ]<br>
         [ ][ ][8]";
    return;
}

/*
    [ ][ ][2]
    [ ][4][ ]
    [6][ ][ ]
*/

if($cuadros[2] == "X" && $cuadros[4] == "X" && $cuadros[6] == "X"){
    echo "<h1> GANADOR [X]</h1>";
    echo"[ ][ ][2]<br>
         [ ][4][ ]<br>
         [6][ ][ ]";
    return;
}else if($cuadros[2] == "O" && $cuadros[4] == "O" && $cuadros[6] == "O"){
    echo "<h1> GANADOR [O]</h1>";
    echo"[ ][ ][2]<br>
         [ ][4][ ]<br>
         [6][ ][ ]";
    return;
}


?>