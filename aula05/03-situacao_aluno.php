<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Curso em Vídeo PHPm</title>
    <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>
    <div>
        <?php
        $nota1 = $_GET['n1'];
        $nota2 = $_GET['n2'];
        $media = ($nota1 + $nota2) / 2;
        echo "A média entre $nota1 e $nota2 é $media<br/>";
        $situacao = ($media < 6) ? "REPROVADO!" : "APROVADO!";
        echo "A situação do aluno é $situacao";
        ?>
    </div>
</body>

</html>