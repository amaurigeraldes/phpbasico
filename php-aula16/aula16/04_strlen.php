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
    <h2>Função strlen:<br>
    Calcula o comprimento de uma String</h2>
    
      <?php
     $txt = "Este é um exemplo de string gigante que foi gerado no PHP para demonstrar o funcionamento da função wordwrap...";

     $res = strlen($txt);
     echo $res;

     echo "<hr>";

     $txt = "Amaurí Geraldes";
     $res = strlen($txt);
     echo $res;




      ?>

      
     
  </div>
  
</body>

</html>