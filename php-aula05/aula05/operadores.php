<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="_css/estilo.css" />
    <title>Operacoes Aritmeticas</title>
</head>

<body>
    <div>
        <?php
          // Atribuindo os Valores às Variáveis a e b dentro da URL:
          // http://localhost/cursophp/phpbasico/php-aula05/aula05/operadores.php?a=5&b=3
          // $n1 = $_GET["a"];
          // $n2 = $_GET["b"];

          // Atribuindo os Valores às Variáveis dentro do Código:
          $n1 = 3;
          $n2 = 2;
          echo "<h2>Valores recebidos: $n1 e $n2</h2>";
          $m = ($n1 + $n2) / 2;
          echo "A soma vale ". ($n1+$n2);
          echo "<br/>A subtracao vale ". ($n1-$n2);
          echo "<br/>A multiplicacao vale ". ($n1*$n2);
          echo "<br/>A potenciacao vale ". ($n1**$n2);
          echo "<br/>A divisao vale ". ($n1/$n2);
          echo "<br/>O resto da soma (modulo) vale ". ($n1%$n2);
          echo "<br/>A media vale $m";
          echo "<br/>A raiz quadrada vale ". sqrt($n1**$n2);
          echo "<br/>A raiz quadrada vale ". ($n1**$n2) ** (1/2);
          echo "<br/>A raiz cubica vale ". ($n1**$n1) ** (1/3);
        ?>
    </div>
</body>

</html>