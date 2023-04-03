<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
      <!-- Operadores Lógicos:

        Operador and ou &&: As duas premissas precisam ser verdadeiras
        X    Y    XeY
        V    V     V
        V    F     F
        F    V     F
        F    F     F

        Operador or ou ||: Uma das premissas precisa ser verdadeira
        X    Y    XouY
        V    V     V
        V    F     V
        F    V     V
        F    F     F

        Ou EXCLUSIVO
        Operador xor: As duas premissas precisam ser diferentes
        X    Y    XxouY
        V    V     F
        V    F     V
        F    V     V
        F    F     F
        
        Operador !: NÃO
        X    Y
        V    F    O que não é Verdadeiro, é Falso
        F    V    O que não é Falso, é Verdadeiro

        -->

        <?php
          // Valores das Variáveis atribuídos na URL:
          // $ano = $_GET["an"];
          // $idade = 2014 - $ano;

          // Valores das Variáveis atribuídos no Código:
          $ano = 1958;
          $idade = 2023 - $ano;

          echo "<p>Quem nasceu em $ano tem <strong>$idade anos</strong> de idade.<br></p>";

          // Usando Operador Lógico e Operador Unário:
          $tipo = ($idade >= 18 && $idade < 65) ? "É OBRIGATÓRIO" : "NÃO É OBRIGATÓRIO";

          echo " E dessa forma, seu voto <strong>$tipo</strong>.";
       
        ?>

    </div>
</body>

</html>