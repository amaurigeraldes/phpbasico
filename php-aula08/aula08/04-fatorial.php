<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <h2>Cálculo Fatorial</h2>
        <?php

          $valor = $_GET["valor"] ?? "Sem Valor";
            
          if ($valor != "" and $valor >= 0) {
            $i = $valor;
            $i = $_GET["valor"];
            $calc = 1;
            while ($i > 1) {
              $calc *= $i;
              $i--;
            }

            echo "<p>O Fatorial de <strong>" . number_format($valor, 0, ",", ".") . "</strong> é igual a <strong>" . number_format($calc, 0, ",", ".") . "</strong>.</p>";
          } else {
            echo "Digite um valor maior do que Zero!";
          }
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a tela anterior</a></p>
    </div>
</body>

</html>