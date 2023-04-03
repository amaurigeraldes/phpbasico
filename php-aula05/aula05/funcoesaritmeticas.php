<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Funcoes Aritmeticas em PHP</title>
  <style>
      h2 {
          font: 15pt Arial;
          color: #171559;
          font-weight: bold;
      }
  </style>
</head>
<body>
<div>
    <?php
        // Atribuindo os Valores às Variáveis a e b dentro da URL:
        // http://localhost/cursophp/phpbasico/php-aula05/aula05/funcoesaritmeticas.php?x=4&y=3
        // $v1 = $_GET["x"];
        // $v2 = $_GET["y"];

        // Atribuindo os Valores às Variáveis dentro do Código:
        $v1 = 8000;
        $v2 = 1.999;
        echo "<h2>Valores recebidos: $v1 e $v2</h2>";

        // abs() : Valor Absoluto
        echo "O valor absoluto de $v2 = " . abs($v2);

        // pow() : Potenciação
        // <sup></sup> : Colocar um Índice
        // <strong></strong> : Colocar em Negrito
        echo "<br/>O valor de $v1<strong><sup>$v2</sup></strong> = " . number_format(pow($v1, $v2), 2, ",", ".");
        
        // sqrt() : Raiz Quadrada
        echo "<br/>A raiz quadrada de $v1 = " . number_format(sqrt($v1), 2, ",", ".");

        // round() : Arredondamento Aritmético
        echo "<br/>O valor de $v2 arredondamento aritmético = " . round($v2);

        // floor() : Arredondamento para Baixo
        echo "<br/>O valor de $v2 arredondamento para baixo = " . floor($v2);

        // ceil() : Arredondamento para Cima
        echo "<br/>O valor de $v2 arredondamento para cima = " . ceil($v2);

        // intval() : Valor Inteiro da Variável
        echo "<br/>A parte inteira de $v2 = " . intval($v2);

        // number_format() : Formatação
        // number_format($var, 2, ",", ".") : Definir 2 Casas Decimais e,
        // number_format($var, 2, ",", ".") : definir o Separador de Milhar e,
        // number_format($var, 2, ",", ".") : substituir o Ponto pela Virgula.
        echo "<br/>O valor de $v1 em moeda = R$ " . number_format($v1, 2, ",", ".");
    ?>
</div>
</body>
</html>
 