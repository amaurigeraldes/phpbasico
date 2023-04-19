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
    <h2>Função str_word_count:<br>
    Conta a quantidade de palavras de uma String</h2>
    
      <?php
     $txt = "Este é um exemplo de string gigante que foi gerado no PHP para demonstrar o funcionamento da função wordwrap.";

     $res = str_word_count($txt);
     echo $res;

     echo "<hr>";

     $txt = "Amauri Moreira Geraldes";
     
    // 0: Conta a quantidade de palavras:
     $res = str_word_count($txt, 0);
     echo $res;
     echo "<br>";
    
    // 1: Cria um Array/Vetor:
     $res = str_word_count($txt, 1);
     print_r($res);
     echo "<br>";

     // 2: Mostra a posição inicial de cada elemento do Vetor: 
     $res = str_word_count($txt, 2);
     print_r($res);
     echo "<br>";

      ?>

      
     
  </div>
  
</body>

</html>