<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="_css/estilo.css" />
    <title></title>
</head>

<body>
    <div>
        <?php
              $nome = "Maria";
              $idade = 18;
              echo '$nome tem $idade anos!';
              echo "<br>"; 
              echo "$nome tem $idade anos!";

              echo "<br>"; 
              var_dump($nome);
              echo "<br>";
              var_dump($idade);
    ?>
    </div>
</body>

</html>