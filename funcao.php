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
 nomeFuncao();
?>