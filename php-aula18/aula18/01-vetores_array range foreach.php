<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="_css/estilo.css" />
  <meta charset="UTF-8" />
  <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>

    
  
  <div>
    <h1>Vetores e Matrizes</h1>
    <pre>
      <table border="1"><tr>
      <?php
      echo "<br>";
      echo "1) Criando um Vetor usando ARRAY:<br>";
      $n = array(3, 5, 8, 2);
      print_r($n); # Ou var_dump($n)
      // Adicionando um elemento ao Vetor 
      $n[] = 7; # É o mesmo que $[4] = 7
      echo "<br>";
      print_r($n);
      echo "<hr>";


      echo "2) Criando um Vetor usando RANGE:<br>";
      # Inicial = 5, Final = 20 e o Passo = 2
      $c = range(5, 20, 2);
      print_r($c); # Ou var_dump($n)
      // Adicionando um elemento ao Vetor 
      $c[] = 21; # É o mesmo que $[8] = 21
      echo "<br>";
      print_r($c);
      echo "<hr>";


      echo "3) Criando um Vetor usando FOREACH:<br>";
      # Inicial = 5, Final = 20 e o Passo = 2
      $x = range(5, 20, 2);
      
      foreach($x as $y) {
        echo "<td>$y ";
      }
      echo "</td>";
      // Adicionando um elemento ao Vetor 
      $x[] = 21; # É o mesmo que $[8] = 21
      echo "<br>";
      print_r($x);
      

      ?>
      </table></tr>
    </pre>
  </div>
  
</body>

</html>