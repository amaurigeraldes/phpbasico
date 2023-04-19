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
    <h2>Função str_replace():<br>
    Substitui uma palavra dentro de uma String</h2>
    
      <?php
     $frase = ("Gosto de estudar Matemática!!!");
     $novaFrase = str_replace("Matemática", "PHP", $frase);
     print($novaFrase);
     echo "<hr>";

    //  Usando o str_ireplace() para ignorar o Case Sensitive
     $frase = ("Gosto de estudar matemática! Matemática é muito legal!");
     $novaFrase = str_ireplace("Matemática", "PHP", $frase);
     print($novaFrase);
     echo "<hr>";
     
      ?>

      
     
  </div>
  
</body>

</html>