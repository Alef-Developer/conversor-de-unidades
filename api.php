<?php
// api.php
if (isset($_GET['grandeza'])) {
    $grandeza = $_GET['grandeza'];
    
    // Inclua aqui a sua função verificar_grandeza
    function verificar_grandeza(string $grandeza): string {
        if($grandeza == "Temperatura"){
            return '<option value="Celsius">Celsius (°C)</option><option value="Fahrenheit">Fahrenheit (°F)</option><option value="Kelvin">Kelvin (K)</option>';
        }else if($grandeza == "Peso"){
            return '<option value="Miligrama">Miligrama (mg)</option><option value="Grama">Grama (g)</option><option value="Quilograma">Quilograma (kg)</option>';
        }else{
            return '<option value="Milímetro">Milímetro (mm)</option><option value="Metro">Metro (m)</option><option value="Quilômetro">Quilômetro (km)</option>';
        }
    }
    
    echo verificar_grandeza($grandeza);
}
?>