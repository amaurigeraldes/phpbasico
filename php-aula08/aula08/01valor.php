<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <h2>Cálculo da Raiz Quadrada</h2>
        <?php

          $valor = $_GET["valor"] ?? "Sem Valor";
            
          if ($valor != "" and $valor >= 0) {
            $valor = $_GET["valor"];
            $raiz = $valor ** (1/2);
            echo "<p>A raiz quadrada de <strong>" . number_format($valor, 3, ",", ".") . "</strong> é igual a <strong>" . number_format($raiz, 3, ",", ".") . "</strong>.</p>";
          } else {
            echo "Digite um valor maior do que Zero!";
          }
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a tela anterior</a></p>
    </div>
</body>

</html>