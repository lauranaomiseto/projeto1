
<!DOCTYPE html
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>   
        <?php
            $chave=$_GET["chave"];
            
            if($chave=="doce"){
                echo"Brigadeiro<br><img src='img/b.jpg' alt='brigadeiro'><br><br>";
                echo"Pudim<br><img src='img/p.jpg' alt='pudim'><br><br>";
                echo"Bolo de chocolate<br><img src='img/bc.jpg' alt='bolo de chocolate'><br><br>";
            }
            elseif($chave=="salgado"){
                echo"Pão de queijo<br><img src='img/pdq.jpg' alt='pão de queijo'><br><br>";
                echo"Torta de frango<br><img src='img/tdf.jpg' alt='torta de frango'><br><br>";
                echo"Coxinha<br><img src='img/c.jpg' alt='coxinha'><br><br>";
            }elseif($chave=="quente"){
                echo"Cappuccino<br><img src='img/ca.jpg' alt='cappuccino'><br><br>";
                echo"Chá<br><img src='img/ch.jpg' alt='chá'><br><br>";
                echo"Chocolate quente<br><img src='img/cq.jpg' alt='chocolate quente'><br><br>";
            }else{
                echo"Frappuccino<br><img src='img/f.jpg' alt='frappuccino'><br><br>";
                echo"Chá<br><img src='img/cg.jpg' alt='chá'><br><br>";
                echo"Refrigerante<br><img src='img/r.jpg' alt='refrigerante'><br><br>";
            }
        ?> 
    </body>
</html>