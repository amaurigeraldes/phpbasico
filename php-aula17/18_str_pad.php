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
    <h2>Função str_pad():<br>
    Insere caracteres ou espaços entre as palavras de uma String</h2>
    
     
      <?php
    //  Espaço = alt + 255
    //  À direita
     $nome = "Geraldes";
     $novo = str_pad($nome, 40, " ", STR_PAD_RIGHT);
     print("Meu nome é Amauri $novo e sou Dev em Portugal!");
     echo "<hr>";

    //  Espaço = alt + 255
    //  Distribuídos à direita e à esquerda
     $nome = "Geraldes";
     $novo = str_pad($nome, 40, " ", STR_PAD_BOTH);
     print("Meu nome é Amauri $novo e sou Dev em Portugal!");
     echo "<hr>";

    //  Espaço = alt + 255
    //  À esquerda
     $nome = "Geraldes";
     $novo = str_pad($nome, 40, " ", STR_PAD_LEFT);
     print("Meu nome é Amauri $novo e sou Dev em Portugal!");
     echo "<hr>";
     
      ?>

      
     
  </div>
  
</body>

</html>