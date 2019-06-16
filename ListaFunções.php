<!DOCTYPE html>
<html>
    <?php
        //Exercício 1
        echo"<strong>Exercício 1:</strong><br>";
            function primo($n){
                $cont=0;
                for($i=1;$i<=$n;$i++){
                    if($n%$i==0){
                        $cont=$cont+1;
                    }
                }
                if($cont==2){
                    return "O número informado é primo.";
                }
                else{
                    return "O núemro informado não é primo.";
                }
            }
            
            echo primo(7);
        echo"<br><br>";
        
        
        //Exercíco 2
        echo"<strong>Exercício 2:</strong><br>";
            function encontrarprimo100(){
                $cont=0;
                for($i=1;$i<=100;$i++){
                    for($j=1;$j<=$i;$j++){
                        if($i%$j==0){
                            $cont=$cont+1;
                        }
                    }
                    if($cont==2){
                        echo $i."<br>";
                    }
                    $cont=0;
                }
            }
            
            encontrarprimo100();
        echo"<br><br>";
        
        
        //Exercício 3
        echo"<strong>Exercício 3:</strong><br>";
            function listacores($vetor){ ?>
                <ul>
                <?php for($i=0;$i<= count($vetor)-1;$i++){ ?>
                    <li> <?php echo $vetor[$i] ?> </li>
                <?php  } ?>
                </ul>
            <?php } 
    
            $cores = array ("branco", "verde", "vermelho", "amarelo");
            listacores($cores);
            ?>
</html>
