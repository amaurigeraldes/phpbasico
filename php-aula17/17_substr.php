<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="_css/estilo.css" />
  <meta charset="UTF-8" />
  <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    
  <div>
    <h1>Funções String em PHP<br> (Parte 02)</h1>
    <h2>Função substr():<br>
    Mostra a Qtde de Caracteres a partir da posição inicial informados, de uma String</h2>
    
      <?php
     $nome = "AMAURI GERALDES";
     $sub = substr($nome, 0, 6);
     print($sub);
     echo "<hr>";

     $nome = "AMAURI GERALDES";
     $sub = substr($nome, -8);
     print($sub);
     echo "<hr>";

     $nome = "AMAURI GERALDES";
     $sub = substr($nome, -8, 5);
     print($sub);
     echo "<hr>";
     
      ?>

      
     
  </div>
  
</body>

</html>