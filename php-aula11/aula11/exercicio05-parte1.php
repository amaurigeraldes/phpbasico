<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>

    <div>

        <h1>Números com intervalos:</h1>

        <form action="exercicio05-parte2.php" method="get">
            <?php
                echo "Inicial: <input type='number' name='inicial' max='100' min='0' value='0'><br>";
                echo "Final: <input type='number' name='final' max='100' min='0' value='0'><br>";
                echo "Passo: <input type='number' name='passo' max='10' min='1' value='1'><br>";
                echo "<br>";
                ?>
                <!-- Botão de Submissão -->
                <input type="submit" value="Enviar" class="botao">
                <input type="reset" value="Limpar" class="botao">
        </form>
    </div>

</body>

</html>





