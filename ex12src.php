<?php

$tab = [1,2,3,4,5];

array_unshift($tab, array_pop($tab));

var_dump($tab);
