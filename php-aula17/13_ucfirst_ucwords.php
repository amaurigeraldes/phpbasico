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
    <h2>Funções ucfirst() e ucwords():<br>
    Coloca a primeira letra da String em Maiúscula;Coloca a primeira letra da Palavra em Maíuscula.<br></h2>
    
      <?php
     $nome = ucfirst("amauri geraldes");
     print($nome);
     echo "<hr>";

     $nome = ucfirst(strtolower("amauRi geRaldes"));
     print($nome);
     echo "<hr>";

     $nome = ucwords("amauri geraldes");
     print($nome);
     echo "<hr>";


      ?>

      
     
  </div>
  
</body>

</html>