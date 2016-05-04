<?php
  function showExercise($nb){
    $nb = $nb >= 10 ? (string) $nb : '0' . $nb;
    $filename = "ex" . $nb . "src.php";

    if(file_exists($filename)){
      echo "<h3>Exercice $nb :</h3>";
      include($filename);
      echo "<hr/>";
      echo "<h4>Code :</h4>";
      highlight_file($filename);
    }
    else{
      echo "<p>Les sources de l'exercice n'existe pas.</p>";
    }

  }
