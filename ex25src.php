<?php

// Recursive function returning moving value
function move($x, $y, $xD, $yD, $tab){
  if (!isset($tab[$xD][$yD]) || $tab[$xD][$yD] === 0){
    return 0;
  }
  else{
    return 1 + move($x, $y, $xD+$x, $yD+$y, $tab);
  }
}


$board = array_fill(0, 8, array_fill(0,8,1));
$nbMove = 0;
$nbObs = 0;
$done = false;

// Obstacles creation
while ($nbObs < 8){
  $xO = rand(0,7);
  $yO = rand(0,7);
  // Create an obstacle if it not already one
  if ($board[$xO][$yO] !== 0){
    $board[$xO][$yO] = 0;
    $nbObs++;
  }
}
// Place the Queen
do{
  $xD = rand(0,7);
  $yD = rand(0,7);
  // Check for obstacle
  if ($board[$xD][$yD] != 0){
    $done = true;
    $board[$xD][$yD] = 4;
  }
}while(!$done);

// Show board :
for($ii = 0; $ii < 8; $ii++) {
  for ($jj = 0; $jj < 8; $jj++){
    echo $board[$ii][$jj] . "&nbsp;&nbsp;";
  }
  echo "<br/>";
}

// Check for every directions
for ($uu = -1; $uu <= 1; $uu++){
  for($vv = -1; $vv <=1; $vv++){
    if ($uu !== 0 || $vv !== 0){
      $nbMove += move($uu, $vv, $xD+$uu, $yD+$vv, $board);
    }
  }
}
echo "<br/>";
echo "La dame peut faire " . $nbMove .  " déplacements.";
