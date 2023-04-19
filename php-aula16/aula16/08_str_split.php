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
    <h2>Função str_split:<br>
    Cria um Array/Vetor de uma String, separando cada letra dentro de um índice do Vetor.</h2>
    
      <?php
     $txt = "Amauri Geraldes";
    //  " " é o caracter de separação 
     $vetor = str_split($txt);

     print_r($vetor);
     
      ?>

      
     
  </div>
  
</body>

</html>