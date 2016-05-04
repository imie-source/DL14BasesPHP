<?php
  echo "Première boucle (for) : <br/>";
  for($ii = 0; $ii <= 100; $ii++){
    echo "$ii <br/>";
  }
  echo "Deuxième boucle (while) : <br/>";
  $ii = 0;

  while($ii <= 100){
    echo "$ii <br/>";
    $ii++;
  }

  echo "Deuxième boucle (do while) : <br/>";
  $ii = 0;

  do{
    echo "$ii <br/>";
    $ii++;
  }while($ii <= 100);
