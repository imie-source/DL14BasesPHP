<?php
  $n = 0;

  while ($n <= 5) {
    $n++;
  }
  echo 'A : n = ' . $n;
  $n = $p = 0;
  while ($n <= 8) {
    $n += $p;
    $p++;
  }
  echo "B : n = " . $n;

  $n = $p = 0;
  while ($n <= 8) {
    $p++;
    $n += $p;
  }
  echo "C : n = " . $n;

  $n = $p = 0;
  while ($p <= 5) {
    $n += $p;
    $p++;
  }
  echo "D : n = " . $n;
  $n = $p = 0;
  while ($p <= 5) {
    $p++;
    $n += $p;
  }
  echo "E : n = " . $n;
