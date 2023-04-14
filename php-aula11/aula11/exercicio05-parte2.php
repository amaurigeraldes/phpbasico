<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="_css/estilo.css" />
  <meta charset="UTF-8" />
  <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>

  <div>

      <h1>Valores selecionados:</h1>
  
      <?php

        $i = isset($_GET["inicial"]) ? $_GET["inicial"] : 0;
        $f = isset($_GET["final"]) ? $_GET["final"] : 0;
        $p = isset($_GET["passo"]) ? $_GET["passo"] : 0;

        echo "Valor inicial: $i <br>";
        echo "Valor final: $f <br>";
        echo "Passo: $p <br><br>";

        if($i <= $f) {
          while ($i <= $f) {
              echo "$i ";
              $i += $p;
          }
        } else {
          while ($i >= $f) {
            echo "$i ";
            $i -= $p;
          }
        }
        echo "<br><br>";
      ?>
      <!-- <p><a href="javascript:history.go(-1)">Voltar para a tela anterior</a></p> -->
      <button onclick="javascript:history.go(-1)">&#x1F519; Voltar</button>
  
  </div>

</body>

</html>