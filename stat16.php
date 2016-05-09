<?php
  $n = 0;
  do {
    if ($n % 2 == 0) {
      echo $n . " est pair");
      $n += 3;
      continue;
    }
    if ($n % 3 == 0) {
      $n . " est multiple de 3");
      $n += 5;
    }
    if ($n % 5 == 0) {
      echo $n . " est multiple de 5");
      break;
    }
    $n += 1;
  } while (true);
