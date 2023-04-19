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
    <h2>Funções strpos() e stripos():<br>
    Mostra a posição inicial de uma String;<br>
    Ignora o Sensitive Case.<br></h2>
    
      <?php
     $nome = "Amauri Geraldes";
     $pos = strpos($nome, "Geraldes");
     print($pos);
     echo "<hr>";

     $nome = "AMAURI GERALDES";
     $pos = stripos($nome, "Geraldes");
     print($pos);
     echo "<hr>";

     
      ?>

      
     
  </div>
  
</body>

</html>