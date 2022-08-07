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
        $t = "A Andrea é a pessoa mais legal que eu conheci na minha vida!";
        $r = wordwrap($t, 8, "<br/>\n", true);
        echo $r;
        ?>
    </div>
</body>

</html>