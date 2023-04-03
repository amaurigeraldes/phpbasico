<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <!-- Operadores Relacionais:
        $a > $b     Maior;
        $a < $b     Menor;
        $a >= $b    Maior ou igual;
        $a <= $b    Menor ou igual;
        $a <> $b    Diferente;
        $a != $b    Diferente;
        $a == $b    Igual;
        $a === $b   Idêntico;
    -->


    <?php
      // Valores das Variáveis atribuídos na URL:
      //  $n1 = $_GET["a"];
      //  $n2 = $_GET["b"];
      //  $tipo = $_GET["op"];

      // Valores da Váriáveis atribuídos no Código:
      $n1 = 10;
      $n2 = 5;
      $tipo = "s";

       echo "Os valores passados foram $n1 e $n2. <br/>";
       
       // Operador Unário: 
       // $maior = $a > $b ? $a : $b
       // Se $a for maior do que $b, mostrar $a, senão mostrar $b

       $r = ($tipo == "s") ? $n1 + $n2 : $n1 * $n2;

       echo "<p>O resultado será $r.</p>";
    ?>
</div>
</body>
</html>
 