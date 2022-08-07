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
        array_push($v, "O"); //acrescenta "O" na ultima posicao do array
        print_r($v);
        array_pop($v); //elimina o ultimo elemento do array
        print_r($v);
        ?>
        </pre>
    </div>
</body>

</html>