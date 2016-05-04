<?php

$verb = "lancer";
$root = substr($verb, 0, strlen($verb) - 2);
$prefix = ["Je ", "Tu ", "Il ", "Nous ", "Vous ", "Ils "];
$terms = ["ais", "ais", "ait", "ions", "iez", "aient"];
$gCase = $root[strlen($root) - 1] === 'g';
$cCase = $root[strlen($root) - 1] === 'c';

for($ii = 0; $ii < 6; $ii++){
  echo $prefix[$ii];
  if($cCase && $ii !== 3 && $ii !== 4){
    echo substr($root, 0, strlen($root) - 1) . "ç";
  }
  else{
    echo $root;
  }
  if($gCase && $ii !== 3 && $ii !== 4){
    echo "e";
  }
  echo $terms[$ii];
  echo "<br/>";
}
