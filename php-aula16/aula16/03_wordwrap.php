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
    <h2>Função wordwrap:<br>
    Criar quebras de linhas dentro dos códigos</h2>
    
      <?php
     $txt = "Este é um exemplo de string gigante que foi gerado no PHP para demonstrar o funcionamento da função wordwrap...";

     $res = wordwrap($txt);
     echo $res;

     echo "<hr>";

     $res = wordwrap($txt, 20, "<br>\n");
     echo $res;

     echo "<hr>";

     $res = wordwrap($txt, 5, "<br>\n", false);
     echo $res;

     echo "<hr>";

     $res = wordwrap($txt, 5, "<br>\n", true);
     echo $res;




      
      
      ?>

      <hr>
     
  </div>
  
</body>

</html>