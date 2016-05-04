<?php
  $nbPhotocop = rand(1, 40);
  $total = 0;
  $tarif1 = 0.1;
  $tarif2 = 0.08;
  $tarif3 = 0.05;
  var_dump($nbPhotocop);

  if($nbPhotocop <= 10){
    $total = $nbPhotocop * $tarif1;
  }
  elseif($nbPhotocop <= 30){
    $total = $tarif1 * 10 + ($nbPhotocop - 10) * $tarif2;
  }
  else{
    $total = $tarif1 * 10 + $tarif2 * 20 + ($nbPhotocop - 30) * $tarif3;
  }

  echo "Vous devez $total € pour vos $nbPhotocop photocopies.";
