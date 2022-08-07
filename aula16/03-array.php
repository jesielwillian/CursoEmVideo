<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Curso em Vídeo PHP</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>

<body>
    <div>
        <table border="1">
            <tr>
                <?php
                $c = range(5, 20, 2);
                foreach ($c as $valor) {
                    echo "<td>$valor ";
                }
                ?>
        </table>
    </div>
</body>

</html>