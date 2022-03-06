<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Média</title>
</head>
<body>

    <form action="index.php" method="get">
        Primeira nota: <input type="text" name="n1"><br>
        Segunda nota: <input type="text" name="n2"><br>
        Terceira nota: <input type="text" name="n3"><br>
        Quarta nota: <input type="text" name="n4"><br>
        <input type="submit">
    </form>
    
    <?php

       // Variáveis
       $n1 = $_GET['n1'];
       $n2 = $_GET['n2'];
       $n3 = $_GET['n3'];
       $n4 = $_GET['n4'];
       // Função que vai fazer o calculo das notas
       $media = ($n1 + $n2 + $n3 + $n4)/4;
       // Retorna o resultado
       echo "Resultado: $media";

       if ($media >= 7) { // Se for igual ou maior que 7, aprovado!
           echo ' = Aprovado';

       } else { // Menor que 7, Reprovado!
           $media < 7;
           echo ' = Reprovado';
       }

    ?>
    
</body>
</html>