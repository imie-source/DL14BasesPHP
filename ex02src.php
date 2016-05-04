<?php
  $nb = rand(1, 100);
  echo "Nombre : $nb <br/>";

  if($nb % 2 === 0){
    echo "Ce nombre est pair";
  }
  else{
    echo "Ce nombre est impair";
  }
