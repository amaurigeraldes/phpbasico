<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <h2>Resultado</h2>
        <?php

          $nome = $_GET["nome"] ?? "Sem Nome";
          $ano = $_GET["ano"] ?? "Sem Ano";
          $sexo = $_GET["sexo"] ?? "Sem Sexo";
            
          if ($nome != "" && $ano != "" && $ano <= date("Y")) {
            $idade = date("Y") - $ano;
            echo "$nome é $sexo e tem <strong>$idade anos</strong> de idade.";
          } else {
            echo "Digite todos os Dados Corretamente!";
          }
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a tela anterior</a></p>
    </div>
</body>

</html>