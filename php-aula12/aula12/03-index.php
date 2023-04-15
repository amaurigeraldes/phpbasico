<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
	<h1>Tabuada no PHP</h1>
	<h2>Usando For:</h2>
	<form method="get" action="03-tabuada.php">
	Número:
	<select name="num">
    <?php
        for($i = 1; $i <= 15; $i++) {
			echo "<option>$i</option>";
		}
    ?>
	
	</select>
	<br><br>
	<input type="submit" value="Enviar" class="botao">
	<input type="reset" value="Limpar" class="botao">
	</form>
</div>
</body>
</html>
 