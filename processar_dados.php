<?php
// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenha os valores do formulário
    $zona = $_POST["zona"];
    $qualidade_ar = $_POST["qualidade_ar"];

    // Determine o nível de qualidade do ar
    if ($qualidade_ar >= 0 && $qualidade_ar <= 50) {
        $nivel_qualidade = "Bom";
    } elseif ($qualidade_ar <= 100) {
        $nivel_qualidade = "Moderado";
    } elseif ($qualidade_ar <= 150) {
        $nivel_qualidade = "Ruim";
    } elseif ($qualidade_ar <= 200) {
        $nivel_qualidade = "Muito Ruim";
    } else {
        $nivel_qualidade = "Péssimo";
    }

    // Salve ou processe os dados conforme necessário
    // Por exemplo, você pode armazenar os dados em um banco de dados ou exibi-los em uma página

    // Exemplo de saída de resultados
    echo "Zona: " . $zona . "<br>";
    echo "Qualidade do Ar: " . $qualidade_ar . "<br>";
    echo "Nível de Qualidade do Ar: " . $nivel_qualidade . "<br>";
}
?>