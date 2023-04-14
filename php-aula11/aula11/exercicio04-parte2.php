<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="_css/estilo.css" />
  <meta charset="UTF-8" />
  <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>

  <div>

      <h1>Valores selecionados:</h1>
  
      <?php

        $i = 1;
        while ($i <= 5) {
            $v = "num" . $i;
            $url = "v" . $i;
            $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
            $i++;
        }
        
        

        $i = 1;
        while ($i <= 5) {
            $v = "num" . $i;
            echo "Valor $i : " . $$v . "<br>";
            $i++;
        }

      ?>
      <p><a href="javascript:history.go(-1)">Voltar para a tela anterior</a></p>
  
  </div>

</body>

</html>