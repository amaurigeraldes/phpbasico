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
    <h2>Função printf</h2>
      <?php
      $prod = "Leite";
      $preco = 4.5;
      
      echo "<p>1) Usando o echo e o number_format():</p>";
      echo "O $prod custa R$ ".number_format($preco, 2, ",", ".")."<br><br>";

      // %s é para mostrar uma String
      echo "<p>2) Usando o printf:</p>";
      printf("O %s está custando R$ %.2f", $prod, $preco);

      echo "<p>3) Tabela de parâmetros aceitos pelo printf:</p>";
      echo "<p>
      %d => Mostrar valor decimal (positivo ou negativo); <br>
      %u => Mostrar valor decimal sem sinal (apenas positivos); <br>
      %f => Mostrar valor real; <br>
      %s => Mostrar string; <br>

      
      
      
      </p>";

      ?>
  </div>
  
</body>

</html>