<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>

    <h2>Contador Progressivo: Do While</h2>

    <?php
        echo "<h3>Contagem de 0 a 10:</h3>";
        $c = 0;
        do {
            echo "$c ";
            $c++;
        } while($c <= 10);
    ?>
    
    <hr>

    <?php
        echo "<h3>Números pares de 0 a 20:</h3>";
        $c = 0;
        do {
            echo "$c ";
            $c +=2;
        } while($c <= 20);
    ?>


</div>
</body>
</html>
 