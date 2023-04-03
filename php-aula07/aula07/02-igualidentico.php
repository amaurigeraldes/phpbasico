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
          $a = 3;
          $b = "3";
          $r = ($a === $b) ? "SIM" : "NÃO";

          echo "As Variáveis a = $a e b = $b são idênticas? <br> $r <br>";

          echo "Pois, a Variável a é do Tipo: ", var_dump($a).".";
          echo "<br>";
          echo "E, a Variável b é do Tipo: ", var_dump($b).".";
    ?>
    </div>
</body>

</html>