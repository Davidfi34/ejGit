<?php

echo "<h3>Encotrar la cantidad de numeros positivos y negativos</h3>";

//funtion: genera numeros y devuelve los numeros positivos
function genNum(){
    $cant = 20;
    $posit = 0;
    $neg = 0;
    for($i=0; $i<$cant; $i++){
        $num = rand(-99,99);
        echo $num ." , ";
        if ($num == 0){continue;}
        if (NumPost($num)){$posit++;}
        else {$neg++;}
    }
    return [$posit, $neg];
}

//funcion: validacion de numeros 
function NumPost($num){
    if($num > 0){
        return true;
    }
    return false;
}


$Resultado = genNum();
echo "</br>La cantidad de numeros positivos es: ". $Resultado[0];
echo "</br>La cantidad de numeros negativos es: ". $Resultado[1];

?>
