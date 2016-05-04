<?php

// test.php

// echo "Tableau associatif <br/>";
//
// $prenoms = [
//   "Steven" => 32,
//   "Lucas" => 128
// ];
//
// $prenoms["Aurelien"] = 56;
// $prenoms["Paul"] = 12;
//
// $prenoms["Steven"] = 42;
//
// var_dump($prenoms);
//
// foreach($prenoms as $key => $value){
//   echo "$key est associé à $value <br/>";
// }
//
// echo "Tableau indéxé<br/>";
//
// $notes = [12,15,8,7,2];
//
// var_dump($notes);
//
// for($ii = 0; $ii < count($notes); $ii++){
//   echo "clé : $ii => valeur : $notes[$ii] <br/>";
// }
//
// foreach($notes as $value){
//   echo "Note : $value <br/>";
// }

// $matieres = [];
//
// $matieres["SQL"] = [12, 15, 17];
// $matieres["Algo"] = [8, 15, 5];
//
// var_dump($matieres);
//
// $matieres["SQL"][] = 12;

// $matieres = [
//   "SQL" => [
//     "janvier" => [12,15,17],
//     "fevrier" => [13,16,18],
//     "mars" => [8,7,5]
//   ]
// ];
//
// var_dump($matieres);
//
// foreach($matieres as $matiere => $months){
//   foreach($months as $month => $notes){
//     foreach($notes as $note){
//       echo "$matiere : $month : $note <br/>";
//     }
//   }
// }

// $tab = [1,2,3,4,5,6,7];
//
// var_dump($tab);
// $index = 1;

// if(array_key_exists($index, $tab)){
//   echo $tab[$index];
// }
// else{
//   echo "L'index n'existe pas.";
// }

// $prenoms = ["Paul", "Eric", "Steven"];
//
// var_dump($prenoms);
//
// array_pop($prenoms);
//
// var_dump($prenoms);
//
// array_shift($prenoms);
//
// var_dump($prenoms);
//
// array_unshift($prenoms, "Aurelien", "Allal");
// var_dump($prenoms);
//
//
// array_splice($prenoms, 1, 1);
//
// var_dump($prenoms);

// $name = "anticonstitutionnellement";
//
// var_dump(strpos($name, "z"));
//
// var_dump(round(-3.15, 1, PHP_ROUND_HALF_EVEN));

// function multiply($a, $b){
  // return $a * $b;
// }

// function hello(){
  // echo "HELLO WORLD <br/>";
  // return true;
// }
//
// hello();
// hello();
// hello();
//
// $test = hello();
//
// var_dump($test);

// function test(&$arg){
//   $arg = $arg + 10;
//   var_dump($arg);
//
//   return $arg;
// }
//
// $a = 5;
// test($a);
//
// var_dump($a);

function test($tab){
  $tab[] = 100;
  echo "DANS LA FONCTION";
  var_dump($tab);
}

$tab = [5,10,15];

test($tab);

var_dump($tab);

echo multiply(5,10);

$txt = '';

for($ii = 0; $ii < 10; $ii++){
  $txt .= chr(rand(65,90));
}

var_dump($txt);
