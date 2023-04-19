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
    <h2>Função explode:<br>
    Criar um Array/Vetor de uma String</h2>
    
      <?php
     $txt = "Este é um exemplo de string";
    //  " " é o caracter de separação 
     $vetor = explode(" ", $txt);

     print_r($vetor);
     
      ?>

      
     
  </div>
  
</body>

</html>