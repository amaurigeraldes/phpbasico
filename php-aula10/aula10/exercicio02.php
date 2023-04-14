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
      
      echo "<h2>Calculando...</h2>";

      $diaSemana = isset($_GET["ds"]) ? $_GET["ds"] : 0;

      switch ($diaSemana) {
          case 2:
          case 3:
          case 4:
          case 5:
          case 6:
            echo "Levanta e vai estudar! :) <br><br>";
            break;
          case 7:
          case 8:
            echo "Descanse pequeno gafanhofo! :) <br><br>";
            break;
          default:
            echo "Dia da semana inválido!!! :) <br><br>";
      }
      ?>
      <button onclick="javascript:history.go(-1)" class="botao" >&#x1F519; Voltar</button>
  </div>
</body>

</html>