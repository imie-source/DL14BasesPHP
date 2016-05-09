<?php
  $n = 0;
  while ($n <= 5) {
    $n++;
  }
  echo "A : n = " . $n);
  $n = $p = 0;
  while ($n <= 8) {
    $n += $p++;
  }
  echo "B : n = " . $n);
  $n = $p = 0;
  while ($n <= 8) {
    $n += ++$p;
  }
  echo "C : n = " . $n);
  $n = $p = 0;
  while ($p <= 5) {
    $n += $p++;
  }
  echo "D : n = " . $n);
  $n = $p = 0;
  while ($p <= 5) {
    $n += ++$p;
  }
  echo "E : n = " . $n);
