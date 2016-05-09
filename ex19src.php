<?php

for($ii = 2; $ii <= 100; $ii++){
  $prime = true; // flag
  for($jj = 2; $jj <= ceil($ii/2); $jj++){
    if($ii % $jj === 0){
      $prime = false;
      break;
    }
  }
  if($prime){
    echo "$ii est un nombre premier.<br/>";
  }
}
