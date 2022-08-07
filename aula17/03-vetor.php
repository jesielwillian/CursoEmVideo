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
        $v = array("A", "J", "M", "X", "K");
        print_r($v);
        array_unshift($v, "O"); // acrescenta "O" na 1ª posiçãoo da lista
        print_r($v);
        array_shift($v); // elimina a 1ª posição da lista 
        print_r($v);
        ?>
        </pre>
    </div>
</body>

</html>