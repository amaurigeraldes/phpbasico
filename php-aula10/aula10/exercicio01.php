<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>

<div>
        <?php

        echo "<h2>Calculando...</h2>";

        $num = isset($_GET["num"]) ? $_GET["num"] : 0;
        $oper = isset($_GET["oper"]) ? $_GET["oper"] : 1;

        switch ($oper) {
          case 1:
            $resultado = $num * 2;
            break;

          case 2:
            $resultado = $num ** 3;
            break;

          case 3:
            $resultado = sqrt($num); # Ou: $num ** (1/2);
            break;
        }

        echo "O resultado da operação solicitada é <span class='foco'>$resultado</span>.<br><br>";

        ?>

        <button onclick="javascript:history.go(-1)" class="botao" >&#x1F519; Voltar</button>

    </div>

  </body>

</html>
 