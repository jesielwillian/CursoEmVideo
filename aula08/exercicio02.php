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
        $d = isset($_GET['ds']) ? $_GET['ds'] : 0;
        switch ($d) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Estudar!";
                break;
            case 7:
            case 8:
                echo "Descansar!";
                break;
            default:
                echo "Dia da semana inválido!";
        }
        ?>
        <p><a href="javascript:history.go(-1)" class="botao">Voltar</a></p>
    </div>
</body>

</html>