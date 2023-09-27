$(document).ready(function (){
    var contador_jugador = 0
    var contador_cpu = 0
    var valor_cpu

    $("#boton_piedra").click(function (e) {
        //console.log("si")
        var opcion = $(this).attr("data-id")
       // console.log(opcion) 
        if(opcion=="piedra"){
            valor_cpu = Math.floor(Math.random()*3+1);
            if(valor_cpu == 1){
                $("#cpu").attr("src", "piedra.png")
                console.log(valor_cpu);
                }else if(valor_cpu == 2){ 
                    $("#cpu").attr("src", "papel.png")
                    console.log(valor_cpu);
                }else if(valor_cpu == 3){
                    $("#cpu").attr("src", "tijera.png")
                    console.log(valor_cpu);
                }
            $("#jugador").attr("src", "piedra_espejo.png")
        } 
        
      //validacion piedra
      if(valor_cpu == 1){
        console.log("Empate");
       } else if(valor_cpu <= 2){
        console.log("gana papel");
       } else {
        console.log("gana piedra");
       }

       //validacion papel
       if(valor_cpu == 2){
        console.log("empate");
       } else if(valor_cpu <= 1){
        console.log("gana nose");
       } else {
        console.log("gana tijera");
       }
      
    });

    $("#boton_papel").click(function (e) {
       // console.log("no")
        var opcion = $(this).attr("data-id")
       //console.log(opcion) 
       if(opcion=="papel"){
        valor_cpu = Math.floor(Math.random()*3+1);
        if(valor_cpu == 1){
            $("#cpu").attr("src", "piedra.png")
            console.log(valor_cpu);
            }else if(valor_cpu == 2){ 
                $("#cpu").attr("src", "papel.png")
                console.log(valor_cpu);
            }else if(valor_cpu == 3){
                $("#cpu").attr("src", "tijera.png")
                console.log(valor_cpu);
            }
        $("#jugador").attr("src", "piedra_espejo.png")
    }       
    });

    $("#boton_tijera").click(function (e) {
        // console.log("no")
         var opcion = $(this).attr("data-id")
        //console.log(opcion) 
        if(opcion=="tijera"){
            valor_cpu = Math.floor(Math.random()*3+1);
            if(valor_cpu == 1){
                $("#cpu").attr("src", "piedra.png")
                console.log(valor_cpu);
                }else if(valor_cpu == 2){ 
                    $("#cpu").attr("src", "papel.png")
                    console.log(valor_cpu);
                }else if(valor_cpu == 3){
                    $("#cpu").attr("src", "tijera.png")
                    console.log(valor_cpu);
                }
            $("#jugador").attr("src", "piedra_espejo.png")
        }       
     });

});