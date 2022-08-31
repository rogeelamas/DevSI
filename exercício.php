
<h3>Exercício 1 - Faça um array que gere 10 numeros aleatórios e verifique quantos são pares, quantos são ímpares, quantos são positivos e quantos são negativos.</h3>"
<?php

$numeros = array();
$cont_pares = 0;
$cont_impares = 0;
$cont_negativos = 0;
$cont_positivos = 0;


for($i=0; $i<10; $i++){
    $numeros[$i] = rand(-20,10);
    if ($numeros[$i] % 2 == 0){
        $cont_pares++;
    }else{
        $cont_impares++;
    }
    if($numeros[$i] < 0){
        $cont_negativos++;
    }else{
        $cont_positivos++;
    }
}
echo "Pares: ".$cont_pares. "<br>";
echo "Ímpares: ".$cont_impares."<br>";
echo "Negativos: ".$cont_negativos. "<br>";
echo "Positivos: ".$cont_positivos."<br>";

function ImprimirArray($array){
    for ($i = 0; $i < count($array); $i++){
        echo "<br> Índice   " . $i. " - "."    Valor". $array[$i];
    }
}
ImprimirArray($numeros)."<br><br>";

?>

<h3>Exercício 2 - Utilizando o for imprima a tabuada do 8.</h3>

<?php
    $numero = 8;
    for($i=0; $i<=10; $i++){
        $resultado = $numero*$i;
        echo $tabuada = "8 x $i = $resultado"."<br>";}
    
?>

<h3>Exercício 3 - Faça uma função que some todos os ímpares de 10 a 50 e exiba na tela.</h3>
<?php
function SomarImpares($inicial, $final){
    $soma = 0;
    for($i = $inicial; $i <= $final; $i++){
        if($i % 2 == 1){
        $soma += $i;
        }  
    }
    echo $soma;
}
SomarImpares(10,50);

?>

<h3>Exercício 4 - Faça uma função que calcule a porcentagem de um número.</h3>
<?php   
    $base = 20;
    $valor = 150;
   
    function percent($base, $valor){
        $resultado = ($valor * $base)/100;
        echo $resultado="$valor" . "x" . "$base" . "=" . "$resultado" . "<br><br>";
    }
        percent($base, $valor);
?>
<h3> Exercício 5 - Gere um array com números randômicos (rand(-50,50)) e ordene em ordem crescente.</h3>

<?php

function ArrayAleatorio($qtdInd){
    $array = array();
    for($i = 0; $i <= $qtdInd; $i++){
        array_push($array, rand(-50,50));
    }
    return $array;
}
$novoArray = ArrayAleatorio(10);
ImprimirArray($novoArray);

function OrdenarArray($array){
    $tamanho = count($array)-1;
    $auxiliar = 0;

    for($i = 0; $i<$tamanho; $i++){
        for($j = 0; $j<$tamanho-$i; $j++){
                    
            if($array[$j] > $array[$j+1]){
                $auxiliar = $array[$j];
                $array[$j] =  $array [$j+1];
                $array [$j+1] = $auxiliar;
            }

        }

    }
    return $array;
}
echo "<br>Antes <br>" ; ImprimirArray($novoArray);
$arrayordenado = OrdenarArray($novoArray);
echo "<br> Depois de Ordenar <br>"; ImprimirArray($arrayordenado);

?>