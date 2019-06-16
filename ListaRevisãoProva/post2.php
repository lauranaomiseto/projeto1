<?php

function calculos($s, $pa){
    $sn= $s+($s*$pa/100);
    return $sn;
}

$n= $_POST["n"];
$s= $_POST["s"];
$pa=$_POST["pa"];
$sn= calculos($s, $pa);

echo"Nome: ".$n."<br>";
echo"Salário: ".$s."<br>";
echo"Percentual de aumento: ".$pa."<br>";
echo"Novo salário: ".$sn;

?>

