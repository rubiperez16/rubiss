<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 4</title>
</head>
<body>
    <h1>soy una simple  pagina!!! =( =( =) </h1>
    <button style="background-color:red;"onclick="rojo ()">red </button>
    <button style="background-color:yellow;"onclick="amarillo()">yellow </button>
    <button style="background-color:green ;"onclick="verde ()">green</button>

    <script>
      function rojo (){
            //alert("outch soy rojo ");
            document.getElementById("esme").sty.backgroundcolor="red";
        }  
        function amarillo  (){
            //alert("outch soy amarillo");
            document.getElementById("esme").sty.backgroundcolor="yellow";

        }
        function verde  (){
           // alert("outch soy verde ");
            document.getElementById("esme").sty.backgroundcolor="green";
        }
</script>
</body>
</html>