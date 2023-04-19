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
    <h2>Função substr_count():<br>
    Contagem de ocorrências dentro de uma String</h2>
    
      <?php
     $nome = "Estou aprendendo PHP no Curso em Vídeo PHP";
     
     $cont = substr_count($nome, "e");
     print($cont);
     echo "<hr>";

     $cont = substr_count($nome, "PHP");
     print($cont);
     echo "<hr>";

     $cont = substr_count($nome, "P");
     print($cont);
     echo "<hr>";


     
      ?>

      
     
  </div>
  
</body>

</html>