<?php
// api.php
if (isset($_GET['grandeza'])) {
    $grandeza = $_GET['grandeza'];

    function verificar_grandeza(string $grandeza): string {
        if($grandeza == "Temperatura"){
            return <<<'HTML'
            <option value="Celsius">Celsius (°C)</option>
            <option value="Fahrenheit">Fahrenheit (°F)</option>
            <option value="Kelvin">Kelvin (K)</option>
            HTML;
        }else if($grandeza == "Peso"){
            return <<<'HTML'
            <option value="Miligrama">Miligrama (mg)</option>
            <option value="Grama">Grama (g)</option>
            <option value="Quilograma">Quilograma (kg)</option>
            HTML;
        }else{
            return <<<'HTML'
            <option value="Milímetro">Milímetro (mm)</option>
            <option value="Metro">Metro (m)</option>
            <option value="Quilômetro">Quilômetro (km)</option>
            HTML;
        }
    }
    
    echo verificar_grandeza($grandeza);
}
?>