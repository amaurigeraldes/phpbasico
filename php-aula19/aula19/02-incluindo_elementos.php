<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="_css/estilo.css" />
  <meta charset="UTF-8" />
  <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
  
  <div>
      <h1>Incluindo Elementos em Vetores</h1>
      <pre>
      <?php

      echo "<br>";
      echo "1) Exemplos) <br>";
      echo "1.1) Criando um Vetor: <br>";
      $v = array("A", "J", "M", "X", "K");
      print_r($v);
      echo "<hr>";

      echo "1.2) Incluindo um Novo Elemento no Final de um Vetor; <br>var[] = 'O' ou array_push(var, 'G'):<br>";
      $v[] = "O";
      print_r($v);
      echo "<br>";
      array_push($v, "G");
      print_r($v);
      echo "<hr>";


      echo "1.3) Eliminar o último Elemento de um Vetor; <br>array_pop(var):<br>";
      array_pop($v);
      print_r($v);
      echo "<hr>";
      

      echo "1.4) Incluindo um Novo Elemento no Início de um Vetor; <br>array_unshift(var, 'H'):<br>";
      array_unshift($v, "H");
      print_r($v);
      echo "<hr>";
      
      
      echo "1.5) Eliminando um Elemento no Início de um Vetor; <br>array_shift(var):<br>";
      array_shift($v);
      print_r($v);
      echo "<hr>";


      echo "1.6) Ordem Crescente dos Elementos de um Vetor ; <br>sort(var):<br>";
      sort($v);
      print_r($v);
      echo "<hr>";


      echo "1.7) Ordem Decrescente dos Elementos de um Vetor ; <br>rsort(var):<br>";
      rsort($v);
      print_r($v);
      echo "<hr>";


      echo "1.8) Ordenação Associativa Crescente dos Elementos de um Vetor ; <br>asort(var):<br>";
      asort($v);
      print_r($v);
      echo "<hr>";


      echo "1.9) Ordenação Associativa Decrescente dos Elementos de um Vetor ; <br>arsort(var):<br>";
      arsort($v);
      print_r($v);
      echo "<hr>";


      echo "1.10) Ordenação por Chaves Crescente dos Elementos de um Vetor ; <br>ksort(var):<br>";
      ksort($v);
      print_r($v);
      echo "<hr>";


      echo "1.11) Ordenação por Chaves Decrescente dos Elementos de um Vetor ; <br>krsort(var):<br>";
      krsort($v);
      print_r($v);
      echo "<hr>";


      ?>
      </pre>
  </div>
  
</body>

</html>