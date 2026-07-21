<?php

function converter_temperatura(string $valor): mixed
{
    $valor = floatval($valor);
    $de = $_GET['conversao'];
    $para = $_GET['converter'];

    if ($de === $para) return $valor . " $de";

    // Converte tudo para Celsius primeiro (ponto central)
    $emCelsius = match ($de) {
        'Fahrenheit' => ($valor - 32) * 5 / 9,
        'Kelvin'     => $valor - 273.15,
        default      => $valor // Já está em Celsius
    };

    // Converte de Celsius para o destino
    return match ($para) {
        'Fahrenheit' => ($emCelsius * 9 / 5) + 32 . " Fahrenheit",
        'Kelvin'     => $emCelsius + 273.15 . " Kelvin",
        default      => $emCelsius . " Celsius"
    };
}

function converter_comprimento(string $valor): mixed
{
    $valor = floatval($valor);
    $de = $_GET['conversao'];
    $para = $_GET['converter'];

    if ($de === $para) return $valor . " {$de}(s)";

    // Converte tudo para Metro primeiro (ponto central)
    $emGramas = match ($de) {
        'Milímetro' => $valor / 1000,
        'Quilômetro'     => $valor * 1000,
        default      => $valor // Já está em Metro
    };

    // Converte de Grama para o destino
    return match ($para) {
        'Milímetro' => $emGramas * 1000 . " Milímetro(s)",
        'Quilômetro'     => $emGramas / 1000 . " Quilômetro(s)",
        default      => $emGramas . " Metro(s)"
    };
}
function converter_peso(string $valor): mixed
{
    $valor = floatval($valor);
    $de = $_GET['conversao'];
    $para = $_GET['converter'];

    if ($de === $para) return $valor . " {$de}(s)";

    // Converte tudo para Grama primeiro (ponto central)
    $emGramas = match ($de) {
        'Miligrama' => $valor / 1000,
        'Quilograma'     => $valor * 1000,
        default      => $valor // Já está em Grama
    };

    // Converte de Grama para o destino
    return match ($para) {
        'Miligrama' => $emGramas * 1000 . " Miligrama(s)",
        'Quilograma'     => $emGramas / 1000 . " Quilograma(s)",
        default      => $emGramas . " Grama(s)"
    };
}
