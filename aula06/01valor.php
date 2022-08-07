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
        $valor = $_GET['v'];
        $rq = sqrt($valor);
        echo "A raíz quadrada de $valor é = " . number_format($rq);
        ?>
        <br />
        <a href="01exercicio.html">Voltar</a>
    </div>
</body>

</html>