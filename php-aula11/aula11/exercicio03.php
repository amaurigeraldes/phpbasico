<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="_css/estilo.css" />
  <meta charset="UTF-8" />
  <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
  <div>

    <?php

      echo "<h2>Exercício 03: <br>Estrutura de Repetição While:</h2>";

      $c = 10;

      while ($c >= 0) {
          echo $c . "<br>";
          $c -= 2;
      }

    ?>

  </div>
</body>

</html>