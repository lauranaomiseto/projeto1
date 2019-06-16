<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <form action="calcular.php" method="POST">
           Número 1: <input type="text" name="n1"><br><br>
           Número 2: <input type="text" name="n2"><br><br><br>
           
           Escolha a operação a ser realizada:
           <br>
           <input type="radio" name="op" value="soma">
           <label>Soma</label><br>
           <input type="radio" name="op" value="sub">
           <label>Subtração</label><br>
           <input type="radio" name="op" value="div">
           <label>Divisão</label><br>
           <input type="radio" name="op" value="mult">
           <label>Multiplicação</label><br><br>
           
           <button type="submit" value="enviar">Enviar</button>
        </form>
    </body>
</html>

