<?php
  $distanciaPercorrida = 100;
  $tempo = 100;

  $velocidadeEmMS = $distanciaPercorrida / $tempo;
  $velocidadeEmKmH = $velocidadeEmMS * 3.6;

  echo 'Velocidade em m/s: ' . $velocidadeEmMS . PHP_EOL;
  echo 'Velocidade em km/h: ' . $velocidadeEmKmH . PHP_EOL;
