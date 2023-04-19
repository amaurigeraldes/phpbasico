<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="_css/estilo.css" />
  <meta charset="UTF-8" />
  <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    
  <div>
    <h1>Funções String em PHP<br> (Parte 01)</h1>
    <h2>Função print_r:<br>
    Mostrar detalhes de uma variável (Vetor)</h2>
    <p>Utilizado somente durante Testes, podendo ser substituído por var_dump() ou por var_export().</p>
      <?php
      $x[0] = 4;
      $x[1] = 3;
      $x[2] = 8;
      print_r($x);
      echo "<br>";
      var_dump($x);
      echo "<br>";
      var_export($x);
      ?>

      <hr>

      <?php 
      $y = array(3, 7, 6, 2, 1, 9);
      print_r($y);
      echo "<br>";
      var_dump($y);
      echo "<br>";
      var_export($y);
      ?>

      
      
      

     
  </div>
  
</body>

</html>