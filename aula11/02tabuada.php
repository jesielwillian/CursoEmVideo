<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Curso em Vídeo PHP</title>
    <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>
    <div>
        <?php
        $n = isset($_GET['num']) ? $_GET['num'] : 1;
        for ($c = 1; $c <= 10; $c++) {
            $r = $n * $c;
            echo "$n X $c = $r<br/>";
        }
        ?>
        <p><a href="javascript:history.go(-1)" class="botao">Voltar</a></p>
    </div>
</body>

</html>