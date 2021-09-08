<?php

echo "<h3>Encotrar la cantidad de numeros positivos</h3>";

//funtion: genera numeros y devuelve los numeros positivos
function genNum(){
    $cant = 20;
    $posit = 0;
    for($i=0; $i<$cant; $i++){
        $num = rand(-99,99);
        echo $num ." , ";
        $posit = NumPost($num,$posit);
    }
    return $posit;
}

//funcion: validacion de numeros positivos
function NumPost($num,$posit){
    if($num >= 0){
        ++$posit;
    }
    return $posit;
}


$Resultado = genNum();
echo "<br>";
echo "El resultado es: ". $Resultado;
    
?>
