<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>

<h2>Contador Regressivo: Do While</h2>

    <?php
        echo "<h3>Contagem de 10 a 0:</h3>";
        $c = 10;
        do {
            echo "$c ";
            $c--;
        } while($c >= 0);
    ?>

    <hr>

    <?php
        echo "<h3>Números pares de 20 a 0:</h3>";
        $c = 20;
        do {
            echo "$c ";
            $c -= 2;
        } while($c >= 0);
    ?>




</div>
</body>
</html>
 