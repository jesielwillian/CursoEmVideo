<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Curso em Vídeo PHP</title>
    <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>
    <div>
        <pre>
        <?php
        $m = array(
            array(6, 4),
            array(4, 9),
            array(3, 2, 9)
        );
        $m[0][1] = $m[2][0];
        print_r($m);
        ?>
        </pre>
    </div>
</body>

</html>