<?php

    $vetor= array($_POST["vi"], $_POST["vf"]);
    $vetorpar=array();
    $vetorimpar=array();    
    $media=0;
    $soma=0;
    $cont=0;
    
    for ($i=$vetor[0];$i<=$vetor[1];$i++){
        if($i % 2==0){
            $vetorpar[]=$i;
        }else{
            $vetorimpar[]=$i;
        }
        $soma=$soma+$i;
        $cont=$cont+1;
    }
    $media=$soma/$cont;
    
    echo"valor inicial = ".$vetor[0].", valor final = ".$vetor[1]."<br>";
    echo"valores pares entre ".$vetor[0]." e ".$vetor[1].":<br>";
    for($i=0;$i<count($vetorpar);$i++){
        echo $vetorpar[$i]."<br>";
    }
    echo"valores ímpares entre ".$vetor[0]." e ".$vetor[1].":<br>";
    for($i=0;$i<count($vetorimpar);$i++){
        echo $vetorimpar[$i]."<br>";
    }
    echo"a média dos valores entre ".$vetor[0]." e ".$vetor[1]." é: ".$media;
?>
