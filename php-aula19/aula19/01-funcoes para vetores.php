<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="_css/estilo.css" />
  <meta charset="UTF-8" />
  <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
  
  <div>
      <h1>Funções para Vetores</h1>
      <pre>
      <?php

      echo "<br>";
      echo "1) Exemplos) <br>";
      echo "1.1) Criando Vetores: <br>";
      $n = array("A", 5, true, 2.7);
      echo "<hr>";


      echo "1.2) Exibição de Vetores, Matrizes, Objetos:<br>a) print_r(var);<br>b) var_dump(var); <br>c) var_export(var); <br>";

      echo "<br>";
      echo "Exibem a Estrutura para utilização do Programador. <br>";
      echo "<br>";
      echo "a) print_r(var):<br>";
      print_r($n);
      echo "<br>";
      echo "b) var_dump(var):<br>";
      var_dump($n);
      echo "<br>";
      echo "c) var_export(var):<br>";
      var_export($n);
      echo "<hr>";


      echo "1.3) Contando os elementos de um Vetor - count(var): <br>";
      echo count($n);
      echo "<hr>";
      
      
      
      ?>
      </pre>
  </div>
  
</body>

</html>