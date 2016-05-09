<?php

$nb = 6;
$str = "* ";
for($ii = 1; $ii <= $nb; $ii++){
  for($jj = $nb-$ii; $jj > 0; $jj--){
    echo "&nbsp;";
  }
  echo $str;
  $str .= "* ";
  echo "<br/>";
}
