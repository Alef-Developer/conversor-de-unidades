<?php

include 'helpers.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Importação do framework bootstrap via CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <title>Conversor de Unidades</title>
</head>

<body class="container bg-secondary-subtle">
    <main>
        <form method="get" class="position-absolute top-50 start-50 translate-middle">
            <h1>Conversor de Unidades</h1>
            <p class="fw-bold text-decoration-underline" lang="Grandezas"> Grandezas</p>
            <!-- Inputs -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Comprimento">
                <label class="form-check-label" for="inlineRadio1">Comprimento</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Peso">
                <label class="form-check-label" for="inlineRadio2">Peso</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Temperatura">
                <label class="form-check-label" for="inlineRadio3">Temperatura</label>
            </div>
            <!-- Preenchimento -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="fw-bold form-label text-decoration-underline">Valor</label>
                <input name="valor_conversao" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Numéro inteiro: 100 - Número de Ponto Flutuante: 100.30">
            </div>
            <!-- Seleção 1 -->
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Converter de</label>
                <select name="conversao" class="form-select" id="inputGroupSelect01">
                    <option selected disabled>Escolha uma Grandeza</option>
                </select>
            </div>
            <!-- Seleção 2 -->
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect02">Para</label>
                <select name="converter" class="form-select" id="inputGroupSelect02">
                    <option selected>Escolha uma Grandeza</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Converter</button>
            <?php
            if ($_GET) {
                if (isset($_GET['inlineRadioOptions'])) {
                    if ($_GET['inlineRadioOptions'] == "Temperatura") {
                        echo '<p class="form-control bg-success fw-bold">' . converter_temperatura($_GET['valor_conversao']) . '</p>';
                    } else if ($_GET['inlineRadioOptions'] == "Peso") {
                        echo '<p class="form-control bg-success fw-bold">' . converter_peso($_GET['valor_conversao']) . '</p>';
                    } else {
                        echo '<p class="form-control bg-success fw-bold">' . converter_comprimento($_GET['valor_conversao']) . '</p>';
                    }
                } else {
                    echo '<p class="form-control bg-danger fw-bold"> Nenhuma grandeza foi selecionada. Tente novamente. </p>';
                }
            }

            ?>
        </form>
    </main>
    <!-- Importação do JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Arquivo com código JQuery -->
    <script src="jquery.js"></script>
</body>

</html>