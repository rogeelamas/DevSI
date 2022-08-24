<?php
function nomeFuncao(){
    if(true){
        echo "funcionando a função";
    }else{
        echo "Nunca vai funcionar";
    }
}
function Adicao($num1, $num2){
    $soma = $num1+ $num2;
    return $soma;
}

function Subtracao($num1, $num2){

    $resultado = $num1 - $num2;
    return $resultado;
}

function Multiplicacao($num1, $num2){

    $resultado = $num1 * $num2;
    return $resultado;
}

function Divisao($num1, $num2){

    $resultado = $num1 / $num2;
    return $resultado;
}
function Media($num1,$num2){
    $resultado = ($num1 + $num2) /2;
    return $resultado;
}

function Calculator($num1, $num2, $operator){
    echo "<br>";
    if ($operator == "+"){
        echo Adicao($num1, $num2);
    }else if($operator == "-"){
        echo Subtracao($num1, $num2);
    }else if($operator == "*"){
        echo Multiplicacao($num1, $num2);
    }else if($operator == "/"){
        echo Divisao($num1, $num2);
    }else if($operator == "m"){
        echo Media($num1, $num2);
    }else{
        echo "Digite um valor válido";
    }
}

Calculator(8,6,"*");
Calculator(8,6,"/");
Calculator(8,6,"-");
Calculator(8,6,"+");
Calculator(8,6,"m");

/*function SomaArray($array){
    $retorno = 0;
    for($i = 0; $i < count($array); $i++){
        $retorno += $array[$i];
    }
    return $retorno;
}*/

 //nomeFuncao();
 /*$resultado = Adicao(15,25);
 echo "O resultado da soma é:". $resultado;*/

//$numeros = array(21,32,50,45,12,19,24,21,32,50,45,12,19,2421,32,50,45,12,19,2421,32,50,45,12,19,24);
//echo SomaArray($numeros);


?>