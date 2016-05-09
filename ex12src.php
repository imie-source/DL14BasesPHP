<?php

$tab = [1,2,3,4,5];

array_unshift($tab, array_pop($tab));

var_dump($tab);

$temp = $tab[0];

for($ii = 0; $ii < count($tab) - 1; $ii++){
  $tab[$ii] = $tab[$ii+1];
}

$tab[count($tab) - 1] = $temp;

var_dump($tab);
