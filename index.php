<?php

$lista = array();
// echo $lista;

$nome = array("Fernando", "Vitoria", "Denise", "Mateus", "Guilherme", "Roge", "Virlene");
/*
echo $nome[0]."<br>";
echo $nome[1]."<br>";
echo $nome[2]."<br>";
echo $nome[3]."<br>";
echo $nome[4]."<br>";
echo $nome[5]."<br>";
echo $nome[6]."<br>";
*/
/*
for($i = 0; $i< count($nome); $i++){

    echo $nome[$i]."<br>";
}
*/

$dados = array();
$dados["Nome"] = array("Fer", "Maria", "João");
$dados["Idade"] = array(32, 28, 15);
$dados["Solteiro"] = array(true, false, false);

for($i = 0; $i<10; $i++){
    array_push($dados, $i);
}



echo "<pre>";
var_dump($dados);
echo "</pre>";

echo $dados[1] = "Fernando está no indice 1";
echo $dados[1];

echo "<pre>";
var_dump($dados);
echo "</pre>";

?>