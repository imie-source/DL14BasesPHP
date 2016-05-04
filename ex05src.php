<?php
  $nb = rand(1,10);
  $total = 0;

  for($ii = 1; $ii <= $nb; $ii++){
    $total += $ii; // $total = $total + $ii;
  }

  echo "Somme des nombres de 1 à $nb : $total";
