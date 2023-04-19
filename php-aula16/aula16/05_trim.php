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
    <h2>Funções trim, ltrim e rtrim:<br> Eliminam os espaços em branco de uma String normalmente obtida através de um input.</h2>
    <hr>
    
      <?php
     $txt = "   Amauri Geraldes   ";
     echo "trim: Elimina os espaços no início e no final:<br>";
     echo(strlen($txt));
     echo "<br>";
     $res = trim($txt);
     echo $res;
     echo "<br>";
     echo(strlen($res));

     echo "<hr>";

     
     echo "ltrim: Elimina os espaços à esquerda:<br>";
     echo(strlen($txt));
     echo "<br>";
     $res = ltrim($txt);
     echo $res;
     echo "<br>";
     echo(strlen($res));

     echo "<hr>";

     
     echo "rtrim: Elimina os espaços à direita:<br>";
     echo(strlen($txt));
     echo "<br>";
     $res = rtrim($txt);
     echo $res;
     echo "<br>";
     echo(strlen($res));

     echo "<hr>";



      ?>

      
     
  </div>
  
</body>

</html>