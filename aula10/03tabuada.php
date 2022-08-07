<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Curso em Vídeo PHP</title>
    <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>
    <div>
        <form method="GET" action="03tabuada-resultado.php">

            Número: <select name="numero">
                <?php
                $v = 1;
                while ($v <= 10) {
                    echo "<option value='$v'>$v</option>";
                    $v++;
                }
                ?>
            </select>
            <input type="submit" value="Tabuada" class="botao">
        </form>
    </div>
</body>

</html>