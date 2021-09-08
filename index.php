<?php

echo "<h3>Encotrar la cantidad de numeros positivos</h3>";

//funtion: genera numeros
function genNum(){
    $cant = 20;
    $posit = 0;
    for($i=0; $i<$cant; $i++){
        $num = rand(-99,99);
        echo $num ." , ";
    }
    return $posit;
}

$Resultado = genNum();
echo "<br>";
echo "El resultado es: ". $Resultado;
    
?>
