<?php

$tab = [1,2,3,4,5,6,7,8,7,6,5,4,3,2,1,0,-1,-2,-3,-2,-1,0];

$consecutive = true;

for($ii = 0; $ii < count($tab) - 1; $ii++){
  if(abs($tab[$ii] - $tab[$ii + 1]) !== 1){
    $consecutive = false;
    break;
  }
}
echo $consecutive ? "Consecutif !" : "Nope!";
