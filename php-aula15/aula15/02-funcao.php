<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="_css/estilo.css" />
  <meta charset="UTF-8" />
  <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
  
  <div>
      <h2>Rotinas Externas em PHP</h2>
      <h3>Exercício 02:<br>Include / Require - Funções Externas</h3>
      <p>Include: se houver erro no Script, tenta executar e emite Warnings na Página;</p>
      <p>Require: se houver erro no Script, gera um Erro Fatal e não executa a Página;</p>
      <p>Include_once: Incluirá a chamada da função várias vezes;</p>
      <p>Require_once: Incluirá a chamada da função apenas uma vez;</p>

      <?php
        // Chamando uma Função Externa 
        include "02-funcoes.php";
        echo "<h1>Testando novas funções</h1>";
        ola();
        mostraValor(4);
        echo "<h2>Finalizando o Programa...</h2>";
      ?>

</div>
  
</body>

</html>