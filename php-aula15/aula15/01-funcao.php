<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="_css/estilo.css" />
  <meta charset="UTF-8" />
  <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
  
  <div>

      <h1>Rotinas em PHP</h1>

      <h3>Exercício 01:<br>Function/Passagem por Valor</h3>
      <?php
        // Passando X como parâmetro (por Valor): $x
        function teste1 ($x) {
          $x += 2;
          echo "O valor de X é igual a <strong>" . number_format($x, 1, ",", ".") . "</strong>.<br>";
        }

        $a = 3;
        teste1($a);
        echo "O valor de A é igual a <strong>" . number_format($a, 1, ",", ".") . "</strong>.<br>";
      ?>

      <hr>

      <h3>Exercício 02:<br>Function/Passagem por Referência</h3>
      <?php
        // Passando X como parâmetro (por Referência): &$x
        function teste2 (&$x) {
          $x += 2;
          echo "O valor de X é igual a <strong>" . number_format($x, 1, ",", ".") . "</strong>.<br>";
        }

        $a = 3;
        teste2($a);
        echo "O valor de A é igual a <strong>" . number_format($a, 1, ",", ".") . "</strong>.<br>";
      ?>

  
</div>
  
</body>

</html>