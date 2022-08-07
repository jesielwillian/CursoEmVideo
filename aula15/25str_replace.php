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
        $frase = "Gosto de estudar Tecnologia";
        $novafrase = str_ireplace("tecnologia", "Programação!", $frase);
        echo $novafrase;
        ?>
    </div>
</body>

</html>