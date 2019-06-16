<?php

$vetor=$_GET;

switch ($vetor["operacao"]){
    case "soma":
        $n1=$_GET["n1"];
        $n2=$_GET["n2"];
        $n3=$_GET["n3"];
        $n4=$_GET["n4"];
        
        $resul=$n1+$n2+$n3+$n4;
        break;
    case "multiplicacao":
        $n1=$_GET["n1"];
        $n2=$_GET["n2"];
        $n3=$_GET["n3"];
        $n4=$_GET["n4"];
        
        $resul=$n1*$n2*$n3*$n4;
        break;
    case "subtracao":
        $n1=$_GET["n1"];
        $n2=$_GET["n2"];
        
        $resul=$n1-$n2;
        break;
    case "divisao":
        $n1=$_GET["n1"];
        $n2=$_GET["n2"];
        
        $resul=$n1/$n2;
        break;
}

echo"O resultado de sua operação é: ".$resul;
?>