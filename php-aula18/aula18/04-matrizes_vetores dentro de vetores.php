<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="_css/estilo.css" />
  <meta charset="UTF-8" />
  <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
  
  <div>
      <h1>Matrizes (Vetores dentro de vetores)</h1>
      <pre>
      <?php
      echo "<br>";
      echo "1) Exemplo:) <br>";
      echo "1.1) Criando Vetores dentro de vetores: <br>";
      $n = array(array(2, 3),
                 array(3, 4),
                 array(9, 5));
      print_r($n);
      echo "<hr>";


      echo "1.2) Alterando o Valor de um Elemento: <br>";
      $n[2][0] = $n[1][1];
      print_r($n);
      echo "<hr>";
      
      
      echo "1.3) Incluindo um Novo Elemento: <br>";
      $n[3] = array(7, 8);
      print_r($n);
      echo "<hr>";

      
      echo "1.4) Excluindo um Elemento: unset(x[n]) <br>";
      unset($n[3]);
      print_r($n);
      echo "<hr>";

      ?>
      </pre>
  </div>
  
</body>

</html>