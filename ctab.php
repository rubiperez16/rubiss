<?php 
$num=$_POST['tabla'];//variable que recoge el numero

echo "<h1>Tabla de multiplicar de $num</h1>";//expone el numero de la tabla que se esta multiplicando

for ($i=1; $i <=10 ; $i++){ //genera el bucle para que se multipliquen los numeros hasta el 10

    echo "$i x $num = " , $i*$num,"<br>";//imprime el numero multiplicado, el multiplicador y el resultado

}
?>

