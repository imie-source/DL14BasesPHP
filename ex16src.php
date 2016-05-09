<?php

$n = 0;
do {
  if ($n % 2 == 0) {
    echo $n . " est pair<br/>";
    $n += 3;
    continue;
  }
  if ($n % 3 == 0) {
    echo $n . " est multiple de 3<br/>";
    $n += 5;
  }
  if ($n % 5 == 0) {
    echo $n . " est multiple de 5<br/>";
    break;
  }
  $n += 1;
} while (true);
