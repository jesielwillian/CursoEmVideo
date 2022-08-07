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
        $c = 1;
        do {
            echo "$c ";
            $c += 2;
        } while ($c <= 20);
        ?>
    </div>
</body>

</html>