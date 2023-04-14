<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
    
    echo "<h2>Calculando a Média dos Alunos</h2>";

    // $_REQUEST funciona para todas as Variáveis Superglobais: $_GET, $_POST e $_COOKIES
        // ?? é o Operador de Coalescência Nula: a partir do PHP Versão 7
        $nota1 = $_GET["nota1"] ?? "Sem a Nota1";
        $nota2 = $_GET["nota2"] ?? "Sem a Nota2";

    
        $mediaAluno = ($nota1 + $nota2) / 2;
      

    if($mediaAluno >= 7) {
      echo "A média entre <strong>".number_format($nota1, 2, ",", ".")."</strong> e <strong>".number_format($nota2, 2, ",", ".")."</strong> é igual a <strong>".number_format($mediaAluno, 2, ",", ".").".</strong>"."<br>";
      echo "<br>";
      echo "Situação do Aluno: <strong>APROVADO</strong>" . "<br>";
    } else {
      if($mediaAluno >=5) {
        echo "A média entre <strong>".number_format($nota1, 2, ",", ".")."</strong> e <strong>".number_format($nota2, 2, ",", ".")."</strong> é igual a <strong>".number_format($mediaAluno, 2, ",", ".").".</strong>"."<br>";
        echo "<br>";
        echo "Situação do Aluno: <strong>RECUPERAÇÃO</strong>" . "<br>";
      } else {
        echo "A média entre <strong>".number_format($nota1, 2, ",", ".")."</strong> e <strong>".number_format($nota2, 2, ",", ".")."</strong> é igual a <strong>".number_format($mediaAluno, 2, ",", ".").".</strong>"."<br>";
        echo "<br>";
        echo "Situação do Aluno: <strong>REPROVADO</strong>" . "<br>";
      }
    }
    echo "<br>";
    ?>
    <button onclick="javascript:history.go(-1)">&#x1F519; Voltar</button>

    
</div>
</body>
</html>
 