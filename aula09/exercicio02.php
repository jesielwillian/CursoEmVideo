<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Curso em Vídeo PHP</title>
    <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>
    <div>
        <form method="GET" action="exercicio02pt2.php">
            <?php
            $c = 1;
            while ($c <= 5) {
                echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'/><br/>";
                $c++;
            }
            ?>
            <input type="submit" class="botao" value="Enviar" />
        </form>
    </div>
</body>

</html>