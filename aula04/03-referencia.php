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
        $a = 3;
        $b = &$a;
        $b += 5;
        echo "A variável A vale: $a";
        echo "<br/>A variável B vale: $b";
        ?>
    </div>
</body>

</html>