<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="_css/estilo.css" />
  <meta charset="UTF-8" />
  <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
  
  <div>

      <h1>Rotinas em PHP</h1>
      <h3>Exercício 03: Function Múltiplos Parâmetros</h3>

      <?php

        function soma () {
          
          // Identifica cada Elemento do vetor criando um índice
          $p = func_get_args();
          
          // Qtde de elementos do vetor
          $tot = func_num_args();
          
          // Soma dos valores
          $s = 0;
          
          // $i igual a zero e enquanto $i for menor que $tot, $i++
          for($i = 0; $i < $tot; $i++) {
            // $s recebe o valor de $s mais o valor de $p índice i
            $s = $s + $p[$i];
          }
          return $s;
        }

        // Pode ser informados quantos elementos forem desejados no Array/Vetor
        $r = soma(3.3, 4.2, 8.1, 1.1, 2.0, 15, 150);

        echo "O valor da soma é igual a <strong>" . number_format($r, 1, ",", ".") . "</strong>.<br>";
        
      ?>
  
</div>
  
</body>

</html>