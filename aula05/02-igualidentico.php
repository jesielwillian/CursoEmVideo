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
        $b = '3';
        $r = ($a == $b) ? "SIM!" : "NÃO!";
        echo "As variáveis A e B são iguais? $r<br/>";
        $r = ($a === $b) ? "SIM!" : "NÃO!";
        echo "As variáveis A e B são idênticas? $r";

        ?>
    </div>
</body>

</html>