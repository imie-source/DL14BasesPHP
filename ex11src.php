<?php

$tab = [12,15,25,42,5,6,-10];
$avg = 0;
$length = count($tab);

foreach($tab as $nb){
  $avg += $nb * 1 / $length;
}

echo "La moyenne est $avg";

echo "<br/>";

echo array_sum($tab) / count($tab);
