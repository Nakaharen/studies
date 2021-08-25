<?php

// Perimetro

$raio = 7.5;
$perimetro = 2 * pi() * $raio;

echo "O perimetro do círculo é de " . round($perimetro, 2) . PHP_EOL;

// Área

$areaDeCircunferencia = pi() * ($raio ** 2);
echo "A área do círculo é de " . round($areaDeCircunferencia, 2) . PHP_EOL;