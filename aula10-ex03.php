<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Estados PHP</title>
</head>
<body>
    <?php
        $e = $_GET["selecione"];

        switch($e) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
            case 7:
                echo "Você é da região: <h2>Norte</h2>";
                break;
            case 8:
            case 9:
            case 10:
            case 11:
            case 12:
            case 13:
            case 14:
            case 15:
            case 16:
                echo "Você é da região: <h2>Nordeste</h2>";
                break;
            case 17:
            case 18:
            case 19:
                echo "Você é da região: <h2>Centro-Oeste</h2>";
                break;
            case 20:
            case 21:
            case 22:
            case 23:
                echo "Você é da região: <h2>Sudeste</h2>";
                break;
            case 24:
            case 25:
            case 26:
                echo "Você é da região: <h2>Sul</h2>";
        }
    ?>
    <a href="aula10-ex03.html">Voltar</a>
</body>
</html>