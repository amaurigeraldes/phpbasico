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
      <h2>Exercício 02: Function/Return</h2>

      <?php

        function soma ($a, $b) {
          // $s = $a + $b;
          return $a + $b;
        }

        
        $x = 24;
        $y = 18;
        $r = soma($x, $y);
        echo "A soma de <strong>" . number_format($x, 2, ",", ".") . "</strong> + <strong>" . number_format($y, 2, ",", ".") . "</strong> é igual a <strong>" . number_format($r, 2, ",", ".") . "</strong>.<br>";



      ?>
  
</div>
  
</body>

</html>