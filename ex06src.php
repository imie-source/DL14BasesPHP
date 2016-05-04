<?php
  $nb = rand(1,10);
  $total = 1;

  for($ii = 1; $ii <= $nb; $ii++){
    $total *= $ii; // $total = $total + $ii;
  }

  echo "Factorielle $nb : $total";
