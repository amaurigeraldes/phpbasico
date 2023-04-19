<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="_css/estilo.css" />
  <meta charset="UTF-8" />
  <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
  
  <div>
      <h1>Chaves Associativas</h1>
      <pre>
      <?php
      echo "<br>";
      echo "1) Exemplo 01) <br>";
      echo "Criando um Vetor: <br>";
      $cad = array("nome"=> "Ana",
                   "idade"=> 23,
                   "peso"=> 65.5);
      print_r($cad);
      echo "<br>";

      
      echo "Incluindo um Novo Elemento: <br>";
      $cad["fuma"] = true;
      // print_r($cad);
      foreach($cad as $campo=> $valor) {
        echo "O valor de $campo é $valor <br>";
      }

      echo "<br>";

      echo "Excluindo um Elemento: unset(x[n]) <br>";
      unset($cad["fuma"]);
      print_r($cad);
      
      
      echo "<hr>";

      ?>
      </pre>
  </div>
  
</body>

</html>