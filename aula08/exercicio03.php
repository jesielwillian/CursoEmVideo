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
        $e = isset($_GET['est']) ? $_GET['est'] : "XX";
        switch ($e) {
            case "AC":
            case "AP":
            case "AM":
            case "PA":
            case "RO":
            case "RR":
            case "TO":
                $r = "Região Norte!";
                break;
            case "AL":
            case "BA":
            case "CE":
            case "MA":
            case "PB":
            case "PE":
            case "PI":
            case "RN":
            case "SE":
                $r = "Região Nordeste!";
                break;
            case "DF":
            case "GO":
            case "MT":
            case "MS":
                $r = "Região Centro-Oeste!";
                break;
            case "ES":
            case "MG":
            case "RJ":
            case "SP":
                $r = "Região Sudeste!";
                break;
            case "PR":
            case "RS":
            case "SC":
                $r = "Região Sul!";
                break;
            default:
                $r = "Região Inválida!";
        }
        echo "Você mora na <span class='foco'>$r</span>";
        ?>
        <p><a href="javascript:history.go(-1)" class="botao">Voltar</a></p>
    </div>
</body>

</html>