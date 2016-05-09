<?php

$tab = [-5, 7, 30, 25, 10];
var_dump($tab);

if(!empty($tab)){
  // function style
  echo "Le plus grand écart est : " . (max($tab) - min($tab));
  echo "<br/>";
  // Algo style
  $min = $max = $tab[0];
  for($ii = 1; $ii < count($tab); $ii++){
    if($tab[$ii] > $max){
      $max = $tab[$ii];
    }
    elseif($tab[$ii] < $min){
      $min = $tab[$ii];
    }
  }
  echo "Le plus grand écart est : " . ($max - $min);
}
