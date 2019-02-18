<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//Exercício 1
echo"<strong>Exercício 1</strong><br>";
$n1=10;
$n2=4;
$n3=8;
$n4=6;

$media= ($n1+$n2+$n3+$n4)/4;

if($media>=6){
    echo"Você está aprovado! :)<br>";
}else{
    echo"Você está reprovado ;-;<br>";
}


echo"<br>";
//Exercício 2
echo"<strong>Exercício 2</strong><br>";
echo "Salário: 1200<br>";

$salario= 1200;
if($salario>1000){
    $bonus= ($salario*30)/100;
}else{
    $bonus= ($salario*40)/100;
}

echo"O valor do novo salário será de: ".($salario+$bonus)."<br>";


echo"<br>";
//Exercício 3
echo"<strong>Exercício 3</strong><br>";
echo"Média do aluno: 7,5 | Frenquência do aluno: 0,75<br>";

$media1= 7.5;
$frequencia= 0.75;

if(($media1>=6) && ($frequencia>=0.75)){
    echo"Você está aprovado! :)<br>";
}else{
    echo"Você está reprovado ;-;<br>";
}


echo"<br>";
//Exercício 4
echo"<strong>Exercício 4</strong><br>";

for($i=0;$i<=100;$i=$i+=2){
    echo $i."\n";
}
echo"<br>";


echo"<br>";
//Exercício 5
echo"<strong>Exercício 5</strong><br>";
echo"Número 1: 10 | Número 2: 5<br>";

$numero1=10;
$numero2=5;
if($numero1>$numero2){
    echo"O número 1 é maior que o número 2<br>";
}else{
    echo"O número 2 é maior que o número 1<br>";
}


echo"<br>";
//Exercício 6
echo"<strong>Exercício 6</strong><br>";
echo"Número 1: 10 | Número 2: 5 | Número 3: 15<br>";

$num1=10;
$num2=5;
$num3=15;
if(($num1>$num2) && ($num1>$num3)){
    echo"O maior número esntre eles é o primeiro<br>";
}elseif(($num2>$num1) && ($num2>$num3)){
    echo"O maior número esntre eles é o segundo<br>";
}else{
    echo"O maior número esntre eles é o terceiro<br>";
}


echo"<br>";
//Exercício 7
echo"<strong>Exercício 7</strong><br>";
echo"Némero 1: 10 | Número 2: 5<br>";
$nume1=10;
$nume2=5;
if($nume1==$nume2){
    echo"Os valores são os mesmos<br>";
}elseif($nume1>$nume2){
    echo"O primeiro número é maior que o segundo<br>";
}elseif($nume1<$nume2){
    echo"O primeiro número é menor que o segundo<br>";
}


echo"<br>";
//Exercício 8
echo"<strong>Exercício 8</strong><br>";
echo"Idade: 16<br>";

$idade=16;
if(($idade<18)||($idade>60)){
	echo"Você paga meia<br>";
}else{
	echo"Você deve pagar inteira<br>";
}


echo"<br>";
//Exercício 9
echo"<strong>Exercício 9</strong>";

for($i=1;$i<=10;$i++){
	echo"<h3>tabuada do ".$i."</h3>";
	
	for($j=1;$j<=10;$j++){
		$resul=$i*$j;
		echo $i." x ".$j." = ".$resul." | ";
	}
	
	echo"<br>";
}














