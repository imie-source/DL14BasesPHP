<?php
  $age = rand(5, 15);

  echo "Age : $age <br/>";

  if($age >= 12){
    echo "Cadet";
  }
  elseif($age >= 10){
    echo "Minime";
  }
  elseif($age >= 8){
    echo "Pupille";
  }
  elseif($age >= 6){
    echo "Poussin";
  }
