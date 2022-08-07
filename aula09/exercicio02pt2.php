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
            echo "Valor $i : " . $$v . "<br/>";
            $i++;
        }
        ?>
        <p><a href="javascript:history.go(-1)" class="botao">Voltar</a></p>
    </div>
</body>

</html>