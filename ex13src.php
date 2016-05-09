<?php

$nb = 5;
$c = "*";

for($ii = 1; $ii <= $nb; $ii++){
  for($jj = 1; $jj <= $ii; $jj++){
    echo $c;
  }
  echo "<br/>";
}

// Allal tech Copyright ©
$str = "*";

for($ii = 1; $ii <= $nb; $ii++){
  echo $str . "<br/>";
  $str .= "*";
}
