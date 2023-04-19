<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="_css/estilo.css" />
  <meta charset="UTF-8" />
  <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
  
  <div>
      <h1>Chaves Personalizadas</h1>
      <pre>
      <?php
      echo "<br>";
      echo "1) Exemplo 01) <br>";
      echo "Criando um Vetor: <br>";
      $v = array(1=> "A", 3=> "B", 6=> "C", 8=> "D");
      print_r($v);
      echo "<br>";

      
      echo "Incluindo um Novo Elemento: <br>";
      $v[] = "E";
      print_r($v);
      echo "<br>";

      echo "Excluindo um Elemento: unset(x[n]) <br>";
      unset($v[9]);
      print_r($v);
      echo "<hr>";


      echo "2) Exemplo 02) <br>";
      echo "Criando um Vetor: <br>";
      $v = array(0=> 5,
                 1=> 9,
                 2=> 8,
                 3=> 7);
      print_r($v);
      echo "<br>";

      echo "Alterando os Índices: <br>"; 
      $v = array(3=> 5,
                 1=> 9,
                 0=> 8,
                 7=> 7);
      print_r($v);
      echo "<hr>";

      

      


      ?>
      </pre>
  </div>
  
</body>

</html>