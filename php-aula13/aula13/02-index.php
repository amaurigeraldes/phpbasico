<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <h1>Criando uma Tabuada</h1>
    <form method="get" action="02-tabuada.php">
        Tabuada do número:
        <select name="num">

            <?php
                for ($c = 1; $c <= 25; $c++) {
                    echo "<option>$c</option>";
                }
            ?>
        
    </select>
        <br>
        <input type="submit" value="Enviar" class="botao">
        <input type="reset" value="Limpar" class="botao">
    </form>
</div>
</body>
</html>
 