<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="_css/estilo.css" />
  <meta charset="UTF-8" />
  <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
  <div>
      <?php
      
      echo "<h2>Estados por Regiões: </h2>";

      $estado = isset($_GET["estados"]) ? $_GET["estados"] : 0;
      
      switch ($estado) {
          case 1:
            echo "O Estado onde você mora está localizado na Região<br> Sudeste do Brasil.<br><br>";
            break;
          case 2:
            echo "O Estado onde você mora está localizado na Região<br> Nordeste do Brasil.<br><br>";
            break;
          case 3:
            echo "O Estado onde você mora está localizado na Região<br> Norte do Brasil.<br><br>";
            break;
          case 4:
            echo "O Estado onde você mora está localizado na Região<br> Centro-Oeste do Brasil.<br><br>";
            break;
          case 5:
            echo "O Estado onde você mora está localizado na Região<br> Sul do Brasil.<br><br>";
          }
      ?>
     
      <button onclick="javascript:history.go(-1)" class="botao" >&#x1F519; Voltar</button>
  </div>
</body>

</html>