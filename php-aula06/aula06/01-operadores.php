<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <!-- Operadores de Atribuição:
        Adição         $a = $a + $b    =>     $a += $b 
        Subtração      $a = $a - $b    =>     $a -= $b 
        Multiplicação  $a = $a * $b    =>     $a *= $b 
        Divisão        $a = $a / $b    =>     $a /= $b 
        Módulo         $a = $a % $b    =>     $a %= $b 
        Concatenação   $a = $a . $b    =>     $a .= $b 
        -->

        <?php
          //  $preco = $_GET["p"];

          $preco = 1000;
          
          
          echo "<p>O preço do produto é <strong>R$ " . number_format($preco, 2, ",", ".") . "</strong>.</p>";

          $preco += $preco * 0.1;

          echo "<p>O preço com <strong>10%</strong> de aumento será de <strong>R$ " . number_format($preco, 2, ",", ".") . "</strong>.</p>";

          echo "<hr>";

          $preco = 1200;

          echo "<p>O preço do produto é <strong>R$ " . number_format($preco, 2, ",", ".") . "</strong>.</p>";

          $preco -= $preco * 0.1;

          echo "<p>O preço com <strong>10%</strong> de desconto será de <strong>R$ " . number_format($preco, 2, ",", ".") . "</strong>.</p>";


        ?>
    </div>
</body>

</html>