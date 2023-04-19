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
    <h2>Função implode() ou join():<br>
    Criar uma String a partir de um Array/Vetor</h2>
    
      <?php
     $vetor[0] = "Este";
     $vetor[1] = "é";
     $vetor[2] = "um";
     $vetor[3] = "exemplo";
     $vetor[4] = "de";
     $vetor[5] = "string";

    //  " " é o caracter de separação 
     $texto = implode(" ", $vetor);
     print($texto);

     echo "<hr>";
     
    //  " " é o caracter de separação 
    $texto = join(" ", $vetor);
    print($texto);


      ?>

      
     
  </div>
  
</body>

</html>