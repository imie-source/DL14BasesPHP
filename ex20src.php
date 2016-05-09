<?php

$a = 1237;
$b = 0;

while($a !== 0){
  $b = $b * 10 + $a % 10;
  $a = ($a - $a % 10) / 10;
}

echo $b;
