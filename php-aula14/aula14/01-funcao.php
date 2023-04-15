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
      <h2>Exercício 01: Function/Procedimento</h2>

      <?php

        function soma ($a, $b) {
          $s = $a + $b;
          echo "A soma de <strong>" . number_format($a, 2, ",", ".") . "</strong> + <strong>" . number_format($b, 2, ",", ".") . "</strong> é igual a <strong>" . number_format($s, 2, ",", ".") . "</strong>.<br>";
        }

        soma(3.77, 8.88);
        soma(7,12);
        soma(15, 27);
        soma(365, 752);

        $x = 9;
        $y = 18;
        soma($x, $y);

      ?>
  
</div>
  
</body>

</html>