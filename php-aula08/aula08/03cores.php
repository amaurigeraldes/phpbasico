<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>

    <?php 
        $texto = $_GET["texto"] ?? "Sem Texto";
        $tamanho = $_GET["tamanho"] ?? "Sem Tamanho";
        $cor = $_GET["cor"] ?? "Sem Cor";
    ?>

    <style>
      span.texto1 {
        font-size: <?php echo $tamanho; ?>;
        color: <?php echo $cor; ?>;
      }
    </style>


</head>

<body>
    <div>
        <h2>Resultado da Seleção:</h2>
        <?php
          if ($texto != "") {
            echo "<span class='texto1'>$texto</span>";
          } else {
            echo "Digite os Dados Corretamente!";
          }
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a tela anterior</a></p>
    </div>
</body>

</html>