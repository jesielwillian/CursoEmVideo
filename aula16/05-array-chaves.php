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
        $v = array(
            "nome" => "Jesiel",
            "idade" => 32,
            "peso" => 95
        );
        $v["fuma"] = false;

        foreach ($v as $campo => $valor) {
            echo "O campo $campo possui o conteúdo $valor<br>";
        }
        ?>
    </div>
</body>

</html>