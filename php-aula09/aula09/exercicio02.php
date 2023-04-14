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
    # Atribuindo à Variável $a;
    # Operador Ternário: se o ano foi informado no input, utilizar o valor informado, senão utilizar o valor 1900;
      $anoNasc = isset($_GET["ano"])?$_GET["ano"]:1900;
    # Calculando a Idade. Utilizar Y para mostrar os 4 dígitos;
      $idade = date("Y") - $anoNasc;
    # Ano atual;
      $data = date("Y");
      echo "Você nasceu em $anoNasc e completará $idade anos em $data. <br>";

    # Condição Composta:
    if($idade < 16) {
        $tipoVoto = "Você ainda não pode votar!";
    } elseif($idade >= 16 and $idade < 18) {
          $tipoVoto = "O seu voto é opcional!";
          } else {
            $tipoVoto = "O seu voto é obrigatório!";
          }
        
    echo $tipoVoto . "<br>";
    ?>


    <p><a href="javascript:history.go(-1)">Voltar para a tela anterior</a></p>
</div>
</body>
</html>
 