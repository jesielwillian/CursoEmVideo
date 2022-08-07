<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Curso em Vídeo PHP</title>
    <link rel="stylesheet" href="_css/estilo.css" />
    <style>
        span {
            color: red;
            font-weight: bold;
        }

        .btn {
            background-color: #273747;
            color: #fff;
            padding: 10px;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div>
        <?php
        $n1 = isset($_GET['n1']) ? $_GET['n1'] : "[nota1 não informada]";
        $n2 = isset($_GET['n2']) ? $_GET['n2'] : "[nota2 não informada]";
        $media = ($n1 + $n2) / 2;
        echo "A média entre <span>$n1</span> e <span>$n2</span> é igual a <span>$media</span><br/>";

        if ($media < 50) {
            $situacao = "REPROVADO!";
        } else if ($media >= 50 && $media <= 70) {
            $situacao = "RECUPERAÇÃO!";
        } else {
            $situacao = "APROVADO!";
        }
        echo "Situação do aluno: <span>$situacao</span><br/>";
        ?>
        <p><a class="btn" href="exercicio03.html">Voltar</a></p>
    </div>
</body>

</html>