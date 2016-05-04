<?php

$word = "Gabriel";
$tab = [];

for($ii = 0; $ii < strlen($word);$ii++){
  $tab[$ii] = $word[$ii];
}

for($ii = count($tab) - 1; $ii >= 0;$ii--){
  echo $tab[$ii] . "<br/>";
}
