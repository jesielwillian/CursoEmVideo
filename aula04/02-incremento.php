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
        $atual = $_GET['aa']; // essa linha vai pegar o ano da URL.
        echo "O ano atual é $atual e o ano anterior é " . --$atual;
        ?>
    </div>
</body>

</html>