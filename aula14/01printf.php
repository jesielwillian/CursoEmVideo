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
        $p = "leite";
        $pr = 4;
        //echo "O $p custa R$ ".number_format($pr,2);
        printf("O %s custa R$ %.2f", $p, $pr);
        ?>
    </div>
</body>

</html>