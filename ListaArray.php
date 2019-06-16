
<!DOCTYPE html>
    <?php
    //Exercício 1
    echo"<strong>Exercício 1:</strong><br>";
        $vetor1= array();
        for($i=0;$i<=50;$i++){
            $vetor1[$i]=42;
            echo"Índice: ".$i." | Valor: ".$vetor1[$i]."<br>";
        }
    echo"<br><br>";


    //Exercício 2
    echo"<strong>Exercício 2:</strong><br>";
        $vetor2= array();
        for($i=0;$i<=50;$i++){
            $vetor2[$i]=$i+1;
        }

        echo"<pre>";
        print_r($vetor2);
        echo"</pre>";
     echo"<br><br>";


     //Exercício 3
    echo"<strong>Exercício 3:</strong><br>";
        $vetor3= array();
        $maior=0;
        $indice=0;
        $soma=0;
        for($i=0;$i<=30;$i++){
            $vetor3[$i]= rand(1, 50);
            if($maior<$vetor3[$i]){
                $maior=$vetor3[$i];
                $indice=$i;
            }
            $soma=$soma+$vetor3[$i];
        }
        $media=$soma/30;
        echo"O maior elemento do vetor: ".$maior."<br>";
        echo"O índice do maior elemento: ".$indice."<br>";
        echo"A soma de todos os valores: ".$soma."<br>";
        echo"A média dos valores do vetor: ".$media."<br>";
        
        echo"<pre>";
        print_r($vetor3);
        echo"</pre>";
    echo"<br><br>";


     //Exercício 4
    echo"<strong>Exercício 4:</strong><br>";
        $vetor4= array();
        $cont=2;
        for($i=0;$i<=50;$i++){
            $vetor4[$i]=$cont;
            $cont=$cont+2;
        }
        echo"<pre>";
        print_r($vetor4);
        echo"</pre>";
     echo"<br><br>";

     //Exercício 5
    echo"<strong>Exercício 5:</strong><br>";
        $vetor5=array();
        $vetor5[0]= "Maria";
        $vetor5[1]= "João";
        $vetor5[2]= "Pedro";
        $vetor5[3]= "Gabriela";
        $vetor5[4]= "Samuel";
        $vetor5[5]= "Ana";
        $vetor5[6]= "Isabela";
        $vetor5[7]= "Lucas";
        $vetor5[8]= "Carlos";
        $vetor5[9]= "Carolina";
    ?>
    <select>
        <?php for($i=0;$i<=9;$i++){ ?>
        <option><?php echo $vetor5[$i] ?></option>
        <?php } ?>
    </select>
</html>
