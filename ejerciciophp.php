<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Media y Desviación Estándar</title>
</head>
<body>
    <h1>Cálculo de Media y Desviación Estándar</h1>

    <?php

    // Función para calcular la media
    function calcularMedia($numeros) {
        if (empty($numeros)) {
            return 0;
        }
        return array_sum($numeros) / count($numeros);
    }

    // Función para calcular la desviación estándar
    function calcularDesviacionEstandar($numeros) {
        if (empty($numeros)) {
            return 0;
        }
        $media = calcularMedia($numeros);
        $sumaCuadrados = 0;
        foreach ($numeros as $numero) {
            $sumaCuadrados += pow($numero - $media, 2);
        }
        return sqrt($sumaCuadrados / count($numeros));
    }

    // Función para ejecutar pruebas simples (TDD)
    function runTests() {
        $tests = [
            "Media de una lista vacía" => [[], 0, 0],
            "Media de una lista con un solo elemento" => [[5], 5, 0],
            "Media de una lista de varios elementos" => [[1, 2, 3, 4, 5], 3, 1.414],
            "Media de lista nueva de ejemplo" => [[7, 12, 3, 9, 15, 8, 10], 9.142857, 3.454],
        ];

        foreach ($tests as $description => [$input, $expectedMedia, $expectedDesviacion]) {
            // Probar media
            $media = calcularMedia($input);
            if (round($media, 6) === round($expectedMedia, 6)) {
                echo "<p>$description: Media pasó.</p>";
            } else {
                echo "<p>$description: Media falló. Se esperaba $expectedMedia, pero se obtuvo $media.</p>";
            }

            // Probar desviación estándar
            $desviacion = calcularDesviacionEstandar($input);
            if (round($desviacion, 3) === round($expectedDesviacion, 3)) {
                echo "<p>$description: Desviación estándar pasó.</p>";
            } else {
                echo "<p>$description: Desviación estándar falló. Se esperaba $expectedDesviacion, pero se obtuvo $desviacion.</p>";
            }
        }
    }

    // Llamada a la función de prueba
    runTests();

    // Nuevos números de ejemplo para mostrar en la página
    $numeros = [18, 25, 30, 22, 17, 35, 29];
    ?>

    <h2>Resultados con la lista de números: <?php echo implode(", ", $numeros); ?></h2>
    <p>Media: <?php echo calcularMedia($numeros); ?></p>
    <p>Desviación estándar: <?php echo calcularDesviacionEstandar($numeros); ?></p>

</body>
</html>
