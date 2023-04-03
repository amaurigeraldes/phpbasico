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
          // Valores das Variáveis atribuídos na URL:
          // $nota1 = $_GET["n1"];
          // $nota2 = $_GET["n2"];

          // Valores das Variáveis atribuídos no Código:
          $nota1 = 7;
          $nota2 = 5;
          $m = ($nota1+$nota2)/2;

          echo "A nota1 foi $nota1 e a nota2 foi $nota2, portanto, a média é $m. <br/>";
          
          echo "Sendo assim, o aluno está " . (($m<6) ? "REPROVADO." : "APROVADO.");
    ?>
    </div>
</body>

</html>