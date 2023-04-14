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

        <h1>Gerando várias Caixas<br> de Texto dinâmicamente:</h1>

        <form action="exercicio04-parte2.php" method="get">
            <?php
                $c = 1;
                while($c <= 5) {
                    echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'><br>";
                    $c++;
                }
                echo "<br>";
                ?>
                <!-- Botão de Submissão -->
                <input type="submit" value="Enviar" class="botao">
                <input type="reset" value="Limpar" class="botao">
        </form>
    </div>

</body>

</html>





