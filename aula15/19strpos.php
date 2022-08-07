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
        $frase = "Estou aprendendo PHP";
        $pos = strpos($frase, "PHP");
        echo "A string foi encontrada na posição $pos";
        ?>
    </div>
</body>

</html>