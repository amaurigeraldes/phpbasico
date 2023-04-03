<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <!-- Operadores de Incremento e Decremento:

        Pré-incremento: $a = $a + 1     =>      ++$a 
        Pós-incremento: $a = $a + 1     =>      $a++

        Pré-decremento: $a = $a - 1     =>      --$a 
        Pós-decremento: $a = $a - 1     =>      $a-- 
    -->

    <?php
      

       /* Esse exercicio pretende demonstrar o uso de operadores de incremento e decremento */

       # Essa linha vai pegar o ano na URL
       // $atual = $_GET["aa"];
       
       $atual = 2023;

       echo "O ano atual é $atual e o ano anterior é " . --$atual . ".";

       echo "<br/>O ano atual é $atual e o ano anterior é " . --$atual . ".";

       echo "<br/>O ano atual é $atual e o ano anterior é " . --$atual . ".";
       
    ?>
</div>
</body>
</html>
 